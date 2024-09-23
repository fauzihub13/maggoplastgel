<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createIndex() {
        return view('pages.admin.product.product-create-update', [
            'type_menu' => 'product',
        ]);
    }

    public function store(Request $request) {
        // dd($request);
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'length' => 'integer',
            'width' => 'integer',
            'height' => 'integer',
            'stock' => 'required|integer',
            'status' => 'nullable|boolean',
        ]);


        $slug = Str::slug($data['name']);
        if (Product::where('slug', $slug)->count()) {
            $slug .= '-2';
        }
        $data['slug'] = $slug;

        $product = Product::create($data);

        // $product->productImages()->createMany($request->images);

        $images = $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('product', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => $path
                ]);
            }
        }

        return redirect()->intended('/produk/daftar-produk');
    }

    public function list() {
        $products = Product::with('productImages')->get();
        return view('pages.admin.product.product-list', [
            'type_menu' => 'product',
            'products' => $products
        ]);
    }
}
