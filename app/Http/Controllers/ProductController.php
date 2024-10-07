<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 *  Class ProductController

 *  Controller untuk menangani semua operasi terkait dengan produk
 */
class ProductController extends Controller
{
    /**
     * Menampilkan halaman tambah produk
     * 
     * @return \Illuminate\View\View
     */
    public function createIndex() {
        // Mengambalikan view form tambah produk
        return view('pages.admin.product.product-create-update', [
            'type_menu' => 'product',
        ]);
    }

    /**
     * Menyimpan produk baru ke dalam database
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {
        // Validasi input produk
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

        // Membuat slug berdasarkan nama produk
        $slug = Str::slug($data['name']);

        // Validasi jika slug sudah digunakan atau tidak
        if (Product::where('slug', $slug)->count()) {
            // Jika slug sudah terdaftar tambahkan strin "-2"
            $slug .= '-2';
        }

        // Simpan slug
        $data['slug'] = $slug;

        // Simpan produk baru ke dalam database
        $product = Product::create($data);

        // Validasi jika terdapat gambar produk
        if ($request->hasFile('images')) {
            // Looping semua gambar produk
            foreach ($request->file('images') as $image) {
                // Simpan gambar ke dalam storage
                $path = $image->store('product', 'public');

                // Simpan path gambar ke dalam database
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => $path
                ]);
            }
        }

        // Redirect ke halaman daftar produk
        return redirect()->intended('/produk/daftar-produk');
    }

    /**
     * Menampilkan semua daftar produk
     * 
     * @return \Illuminate\View\View
     */
    public function list() {
        // Mengambil semua produk dengan relasi gambar produk
        $products = Product::with('productImages')->filter(request(['search']))->get();

        // Mengembalikan view daftar produk dengan data produk
        return view('pages.admin.product.product-list', [
            'type_menu' => 'product',
            'products' => $products
        ]);
    }

    /**
     * Menonaktifkan produk
     * 
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deactivate(Product $product) {
        // Validasi jika produk aktif
        if ($product->status) {
            // Update status produk menjadi tidak aktif
            $product->update([
                'status' => false
            ]);
        }

        // Redirect ke halaman daftar produk
        return redirect()->intended('/produk/daftar-produk');
    }

    /**
     * Mengaktifkan produk
     * 
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse 
     */
    public function activate(Product $product) {
        // Validasi jika produk tidak aktif
        if (!$product->status) {
            // Update status produk menjadi aktif
            $product->update([
                'status' => true
            ]);
        }

        // Redirect ke halaman daftar produk
        return redirect()->intended('/produk/daftar-produk');
    }

    /**
     * Menampilkan form update produk
     * 
     * @param \App\Models\Product $product
     * @return \Illuminate\View\View
     */
    public function updateIndex(Product $product) {
        // Mengembalikan view form update produk dengan data produk
        return view('pages.admin.product.product-create-update', [
            'type_menu' => 'product',
            'product' => $product
        ]);
    }

    /**
     * Mengupdate produk
     * 
     * @param \App\Models\Product $product
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Product $product, Request $request) {
        // Validasi input produk
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
        ]);

        // Validasi jika terdapat gambar yang dihapus
        if ($request->has('delete_images')) {
            // Looping semua gambar yang dihapus
            foreach ($request->delete_images as $imageId) {
                // Mengambil gambar produk
                $image = ProductImage::findOrFail($imageId);

                // Menghapus gambar produk dari penyimpanan
                Storage::disk('public')->delete($image->path);

                // Menghapus gambar produk dari database
                $image->delete();
            }
        }

        // Validasi jika terdapat gambar yang diubah
        if ($request->has('images')) {
            // Looping setiap gambar yang diubah
            foreach ($request->images as $imageId => $file) {
                // Validasi jika file gambar ada
                if ($file) {
                    // Mengambil gambar produk dari database
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

        // Update data produk pada database
        $product->update($data);

        // Validasi jika terdapat gambar produk baru
        if ($request->hasFile('new_images')) {
            // Looping setiap gambar produk baru
            foreach ($request->file('new_images') as $image) {
                // Simpan gambar produk baru ke dalam storage
                $path = $image->store('product', 'public');

                // Simpan path gambar produk baru ke dalam database
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => $path
                ]);
            }
        }

        // Redirect ke halaman daftar produk
        return redirect()->intended('/produk/daftar-produk');
    }

    /**
     * Menghapus produk soft delete
     * 
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Product $product) {
        // Soft delete produk
        $product->delete();

        // Redirect ke halaman daftar produk
        return redirect()->intended('/produk/daftar-produk');
    }
}
