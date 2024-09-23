<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Storage;

/**
 *  Class ArticleController

 *  Controller untuk menangani semua operasi terkait dengan artikel
 */
class ArticleController extends Controller
{
    /**
     * Menyimpan artikel baru pada database
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        // Validasi input artikel
        $data = $request->validate([
            'title' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'body' => 'required|string',
            'status' => 'required|in:publish,draft,pending',
            'tags' => 'required|string',
            'article_category_id' => 'required|exists:article_categories,id',
        ]);

        // Menyimpan file thumbnail artikel
        if($request->file('thumbnail')){
            $data['thumbnail'] = $request->file('thumbnail')->store('content', 'public');
        }

        // Menyimpan id user yang login untuk foreign key 'user_id'
        $data['user_id'] = auth()->user()->id;

        // Membuat slug dari judul artikel
        $slug = Str::slug($data['title']);

        // Validasi jika slug sudah digunakan atau tidak
        if(Article::where('slug', $slug)->count()) {
            // Jika slug sudah terdaftar tambahkan "-2" untuk menghindari duplikasi
            $slug .= "-2";
        }

        // Simpan slug
        $data['slug'] = $slug;

        // Menyimpan artikel baru ke database
        $article = Article::create($data);

        // Redirect ke halaman daftar artikel
        return redirect('/artikel/daftar-artikel');

    }

    /**
     * Menampilkan halaman form untuk membuat artikel baru
     *
     * @return \Illuminate\View\View
     */
    public function createIndex() {
        // Mengembalikan view dengan data kategori artikel
        return view('pages.admin.article.article-create-update', [
            'type_menu' => 'article',
            'categories' => ArticleCategory::all()
        ]);
    }

    /**
     * Menampilkan daftar artikel
     *
     * @return \Illuminate\View\View
     */
    public function list() {
        // Mengembalikan view dengan artikel perkategori
        return view('pages.admin.article.article-list', [
            'type_menu' => 'article',
            'articles' => Article::latest()->withoutContent()->notInTrash()->get(),
            'pending' => Article::latest()->withoutContent()->pending()->get(),
            'draft' => Article::latest()->withoutContent()->draft()->get(),
            'trash' => Article::latest()->withoutContent()->trash()->get()
        ]);
    }

    /**
     * Menampilkan halaman form untuk mengupdate artikel
     * 
     * @param \App\Models\Article $article
     * @return \Illuminate\View\View
     */
    public function updateIndex(Article $article) {
        // Mengembalikan view dengan data artikel yang akan diupdate dan kategori artikel
        return view('pages.admin.article.article-create-update', [
            'type_menu' => 'article',
            'article' => $article,
            'categories' => ArticleCategory::all()
        ]);
    }

    /**
     * Mengupdate artikel pada database
     *
     * @param \App\Models\Article $article
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function update(Article $article, Request $request) {
        // Validasi input update artikel
        $data = $request->validate([
            'title' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'body' => 'required|string',
            'status' => 'required|in:publish,draft,pending',
            'tags' => 'required|string',
            'article_category_id' => 'required|exists:article_categories,id',
        ]);

        // Validasi Jika Thumbnail dirubah atau tidak
        if($request->file('thumbnail')){
            // Hapus thumbnail lama
            if (Storage::disk('public')->exists($article->thumbnail)) {
                Storage::disk('public')->delete($article->thumbnail);
            }
            // Simpan thumbnail baru
            $data['thumbnail'] = $request->file('thumbnail')->store('content', 'public');
        }

        // Membuat slug dari judul artikel baru
        $slug = Str::slug($data['title']);

        // Validasi jika slug sudah digunakan atau tidak
        if ($slug !== $article->slug) {
            // Jika slug baru sudah terdaftar tambahkan "-2" untuk menghindari duplikasi
            if(Article::where('slug', $slug)->count()) {
                $slug .= "-2";
            }
        }
        // Simpan slug baru
        $data['slug'] = $slug;

        // Update artikel
        $article->update($data);

        // Redirect ke halaman daftar artikel
        return redirect('/artikel/daftar-artikel');
    }

    /**
     * Soft delete artikel (Trash)
     * 
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function delete(Article $article) {
        // Update kolom 'deleted_at' dengan waktu sekarang
        $article->update([
            'deleted_at' => now()
        ]);

        // Redirect ke halaman daftar artikel
        return redirect('/artikel/daftar-artikel');
    }

    /**
     * Restore artikel dari trash
     * 
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function restore(Article $article) {
        // Update kolom 'deleted_at' menjadi null
        $article->update([
            'deleted_at' => null
        ]);

        // Redirect ke halaman daftar artikel
        return redirect('/artikel/daftar-artikel');
    }

    /**
     * Hapus permanen artikel
     * 
     * @param \App\Models\Article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article) {
        // Hapus file thumbnail
        if (Storage::disk('public')->exists($article->thumbnail)) {
            Storage::disk('public')->delete($article->thumbnail);
        }

        // Hapus artikel pada database
        $article->delete();

        // Redirect ke halaman daftar artikel
        return redirect('/artikel/daftar-artikel');
    }

    /**
     * Menampilkan detail artikel
     * 
     * @param \App\Models\Article $article
     * @return \Illuminate\View\View
     */
    public function show(Article $article) {
        // Mengembalikan view dengan data artikel
        return view('pages.admin.article.article-view', [
            'type_menu' => 'article',
            'article' => $article
        ]);
    }
}
