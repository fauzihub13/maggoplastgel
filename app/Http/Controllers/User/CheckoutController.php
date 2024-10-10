<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShipmentItemsResource;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Str;

class CheckoutController extends Controller
{

    public function productPage() {
        // Mengambil semua produk dengan relasi gambar produk
        $product = Product::with('productImages')->first();

        // Mengembalikan view daftar produk dengan data produk
        return view('pages.user.product', [
            'type_menu' => 'product',
            'product' => $product
        ]);

        // return  $product;
    }

    public function checkoutPage(Request $request) {

        $validator = Validator::make($request->all(), [
            'quantity'=> 'required|integer'
        ]);

        $quantity = $request->quantity;


        // Jika validasi tidak berhasil, kembali ke halaman sebelumnya dengan pesan error
        if ($validator->fails() || $quantity <= 0) {
            return redirect()->route('user.product')->with('error', 'Jumlah produk tidak sesuai.');

        }

        $product = Product::with('productImages')->first();
        $apiKeyBiteship = Config::get('app.api_key_biteship');

        $product->quantity = $quantity;
        // dd($product);

        // Check ShippingRates
        $shippingInfo = $this->shippingInfo($request, $quantity);

        // Pastikan $shippingInfo tidak null
        if ($shippingInfo === null) {
            return null;
        } else {
            // Mengambil data asli dari JsonResponse
            $shippingInfo = $shippingInfo->getData(true); // true untuk mendapatkan data dalam bentuk array

            // Memeriksa apakah status adalah true
            if (isset($shippingInfo['status']) && $shippingInfo['status'] === true) {

                $courierRates = $shippingInfo['price'];

                return view('pages.user.checkout', compact('quantity', 'product', 'courierRates'));

            } else {
                return "api bitehip lemot";

                return redirect()->route('user.product')->with('error', 'Terjadi kesalahan, silahkan coba kembali.');
            }
        }

    }

    public function payment(Request $request){

        Carbon::setLocale('id');
        // dd($request->all());


        $validator = Validator::make($request->all(), [
            'quantity'=> 'required|integer',
            'uniqueCode'=> 'required|integer'
        ]);

        $quantity = $request->quantity;
        $uniqueCode = $request->uniqueCode;
        $product = Product::first();

        // Check ShippingRates
        $shippingInfo = $this->shippingInfo($request, $quantity);


        // Pastikan $shippingInfo tidak null
        if ($shippingInfo === null) {
            return null;
        } else {
            // Mengambil data asli dari JsonResponse
            $shippingInfo = $shippingInfo->getData(true); // true untuk mendapatkan data dalam bentuk array

            // Memeriksa apakah status adalah true
            if (isset($shippingInfo['status']) && $shippingInfo['status'] === true) {
                $courierRates = $shippingInfo['price'];
            } else {
                return redirect()->route('user.product');

            }
        }


        // Jika validasi tidak berhasil, kembali ke halaman sebelumnya dengan pesan error
        if ($validator->fails() || $quantity <= 0) {
            return redirect()->route('user.product')->with('error', 'Jumlah produk tidak sesuai.');
        }

        if ($quantity >= $product->stock) {
            return redirect()->route('user.product')->with('error', 'Jumlah produk melebihi stok yang tersedia.');
        }

        if ($uniqueCode <= 100) {
            return redirect()->route('user.product')->with('error', 'Kode unik tidak sesuai.');
        }

        $totalPayment = ($product->price * $quantity) + $uniqueCode + $courierRates;

        // Midtrans Integration
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = Config::get('app.midtrans_server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $orderId = $this->generateOrderId();

        $params = array(
            'transaction_details' => array(
                'order_id' => $orderId,
                'gross_amount' => $totalPayment,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'last_name' => '',
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone_number,
            ),
        );

        // $snapToken = \Midtrans\Snap::getSnapToken($params);

        try {
            DB::beginTransaction();

            // Save to order table
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->order_number = $orderId;
            $order->status = "pending";
            $order->shipping_cost = $courierRates;
            $order->save();
            // return $order->order_number."";

            // Save to order items table
            $orderItems = new OrderItem();
            $orderItems->order_id = $order->id;
            $orderItems->product_id = $product->id ;
            $orderItems->quantity = $quantity;
            $orderItems->price = $product->price;
            $orderItems->save();


            // Request payment midtrans
            $auth = base64_encode(Config::get('app.midtrans_server_key').":");

            $response = Http::withHeaders([
                'content-type' => 'application/json',
                'authorization' => 'Basic '.$auth,
            ])->post("https://app.sandbox.midtrans.com/snap/v1/transactions", $params);

            $response = json_decode($response->body());
            $snapToken = $response->token;

            // Save to transaction table
            $transaction = new Transaction();
            $transaction->order_id = $order->id;
            $transaction->transaction_id = $orderId;
            $transaction->gross_amount = $totalPayment;
            $transaction->transaction_time = Carbon::now();
            $transaction->midtrans_response = $snapToken;
            $transaction->save();

            DB::commit();

            return view('pages.user.payment', compact('totalPayment', 'snapToken'));

        } catch (\Throwable $th) {
            // DB::rollBack();
            return redirect()->route('user.product')->with('error', 'Terjadi kesalahan, silahkan coba kembali.');

        }

    }

    public function webhookPayment(Request $request) {
        // return "asda";
        // dd($request->all());
        // Request payment midtrans
        $auth = base64_encode(Config::get('app.midtrans_server_key').":");

        $response = Http::withHeaders([
            'content-type' => 'application/json',
            'authorization' => 'Basic '.$auth,
        ])->get("https://api.sandbox.midtrans.com/v2/$request->order_id/status", );

        $response = json_decode($response->body());
        // dd($response);


        $transactionStatuses = ['capture', 'settlement', 'pending', 'cancel', 'expired'];

        $transactionId = $response->order_id;
        $transactionStatus = $response->transaction_status;

        try {

            $transactionInfo = Transaction::where('transaction_id', $transactionId)->firstOrFail();
            $orderInfo = Order::where('order_number', $transactionId)->firstOrFail();

            if(in_array($transactionStatus, $transactionStatuses) && $transactionStatus !== 'pending'){
                $transactionInfo->transaction_status = $transactionStatus;
                $transactionInfo->save();

            }

            if($transactionStatus === 'settlement' || $transactionStatus === 'capture') {
                $orderInfo->status = 'paid';
                $orderInfo->save();
                return "Sukses melakukan pembayaran";

            } else {
                return "Belum sukses melakukan pembayaran, statusnya: ".$transactionStatus;
            }

        } catch (\Throwable $th) {
            //throw $th;
            return "erorrrr kawann ->  ".$th->getMessage();
        }


    }

    public function shippingInfo(Request $request, int $quantity){

        // Jika validasi tidak berhasil, kembali ke halaman sebelumnya dengan pesan error
        if ( $quantity <= 0) {
            return redirect()->route('user.product')->with('error', 'Jumlah produk tidak sesuai.');
        }

        $product = Product::first();
        $apiKeyBiteship = Config::get('app.api_key_biteship');

        $product->quantity = $quantity;

        $items = (new ShipmentItemsResource($product))->toArray($request);

        // dd($items);

        try {
            $customerInfo = User::findOrFail(Auth::user()->id);
            $customerAddress = $customerInfo->address_detail;

            $response = Http::withHeaders([
                'content-type' => 'application/json',
                'authorization' => $apiKeyBiteship,
            ]);

            // Origin Adress
            $getOrigin = $response->get('https://api.biteship.com/v1/maps/areas', [
                'countries' => 'ID',
                'input' => 'Babakan, Bogor Tengah, Kota Bogor. 16128',
                'type' => 'single'
            ]);

            $origin = json_decode($getOrigin->body());

            $originId =  $origin->areas[0]->id;

            // Destination Address
            $getDestination = $response->get('https://api.biteship.com/v1/maps/areas', [
                'countries' => 'ID',
                'input' => $customerAddress,
                'type' => 'single'
            ]);

            $destination = json_decode($getDestination->body());

            $destinationId =  $destination->areas[0]->id;

            $courierOptions = $response->post('https://api.biteship.com/v1/rates/couriers', [
                'origin_area_id' => $destinationId,
                'destination_area_id' => $originId,
                'origin_postal_code' => 16128,
                'destination_postal_code' => $customerInfo->zip_code,
                'couriers' => 'jne',
                'items' => $items
            ]);

            $courierOptions = json_decode($courierOptions);
            $courier = $courierOptions->pricing[0]->price;

            return response()->json([
                'status' => true,
                'message' => 'Berhasil mengecek ongkos kirim.',
                'price' => ($courier)
            ], 200);


        } catch (\Throwable $th) {

            return response()->json([
                'status' => false,
                'message' => 'Gagal mengecek ongkos kirim.',
            ], 201);
        }
    }

    function generateOrderId() {
        // Generate 3 random uppercase letters
        $letters = strtoupper(Str::random(3));

        // Generate 8 random numbers
        $numbers = rand(10000000, 99999999);

        $result = $letters ."-". $numbers;

        // Combine the letters and numbers
        return $result;
    }
}
