<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);


        $slug = Str::slug($data['name']);
        if (Product::where('slug', $slug)->count()) {
            $slug .= '-2';
        }
        $data['slug'] = $slug;

        $product = Product::create($data);

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
        $products = Product::with('productImages')->filter(request(['search']))->get();
        return view('pages.admin.product.product-list', [
            'type_menu' => 'product',
            'products' => $products
        ]);
    }

    public function deactivate(Product $product) {

        if ($product->status) {
            $product->update([
                'status' => false
            ]);
        }

        return redirect()->intended('/produk/daftar-produk');
    }

    public function activate(Product $product) {

        if (!$product->status) {
            $product->update([
                'status' => true
            ]);
        }

        return redirect()->intended('/produk/daftar-produk');
    }

    public function updateIndex(Product $product) {
        return view('pages.admin.product.product-create-update', [
            'type_menu' => 'product',
            'product' => $product
        ]);
    }

    public function update(Product $product, Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'length' => 'integer',
            'width' => 'integer',
            'height' => 'integer',
            'stock' => 'required|integer',
            'status' => 'boolean',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:10000',
            'new_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        // Hapus gambar yang dihapus
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = ProductImage::findOrFail($imageId);
                Storage::disk('public')->delete($image->path);
                $image->delete();
            }
        }

        // Update gambar yang ada
        if ($request->has('images')) {
            foreach ($request->images as $imageId => $file) {
                if ($file) {
                    $image = ProductImage::findOrFail($imageId);
                    
                    // Hapus gambar lama dari storage
                    Storage::disk('public')->delete($image->path);
                    
                    // Simpan gambar baru
                    $path = $file->store('product', 'public');
                    
                    // Update path di database
                    $image->update(['path' => $path]);
                }
            }
        }

        $product->update($data);

        if ($request->hasFile('new_images')) {
            foreach ($request->file('new_images') as $image) {
                $path = $image->store('product', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => $path
                ]);
            }
        }

        return redirect()->intended('/produk/daftar-produk');
    }

    public function delete(Product $product) {
        $product->delete();

        return redirect()->intended('/produk/daftar-produk');
    }
}
