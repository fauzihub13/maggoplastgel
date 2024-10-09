<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShipmentItemsResource;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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
            $courierRates = $courierOptions->pricing[0]->price;

            return view('pages.user.checkout', compact('quantity', 'product', 'courierRates'));


        } catch (\Throwable $th) {
            return "oiiii, errorrr kawannn". $th->getMessage();
        }





        // return $quantity."";

    }

    public function shippingRate(Request $request){

        $validator = Validator::make($request->all(), [
            'quantity'=> 'required|integer'
        ]);

        $product = Product::first();

        // Config::get('app.api_key_biteship');
    }
}
