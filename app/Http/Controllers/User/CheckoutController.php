<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
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
        $product = Product::with('productImages')->first();


        // Jika validasi tidak berhasil, kembali ke halaman sebelumnya dengan pesan error
        if ($validator->fails() || $quantity <= 0) {
            return redirect()->route('user.product')->with('error', 'Jumlah produk tidak sesuai.');
            // return $validator->errors()."";
        }

        return view('pages.user.checkout', compact('quantity', 'product'));
        // return $quantity."";

    }
}
