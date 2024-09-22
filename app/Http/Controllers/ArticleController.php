<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function create(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'body' => 'required|string',
            'status' => 'required|in:publish,draft,pending',
            'tags' => 'required|string',
            'article_category_id' => 'required|exists:article_categories,id',
        ]);

        if($request->file('thumbnail')){
            $data['thumbnail'] = $request->file('thumbnail')->store('content', 'public');
        }

        else {
            echo "gagal upload thumbnail";
        }

        $data['user_id'] = auth()->user()->id;
        $slug = Str::slug($data['title']);
        if(Article::where('slug', $slug)->count()) {
            $slug .= "-2";
        }
        $data['slug'] = $slug;

        $article = Article::create($data);

        return redirect('/artikel/daftar-artikel');

    }

    public function createIndex() {
        return view('pages.admin.article.article-create-update', [
            'type_menu' => 'article',
            'categories' => ArticleCategory::all()
        ]);
    }

    public function list() {
        return view('pages.admin.article.article-list', [
            'type_menu' => 'article',
            'articles' => Article::latest()->notInTrash()->get(),
            'pending' => Article::latest()->pending()->get(),
            'draft' => Article::latest()->draft()->get(),
            'trash' => Article::latest()->trash()->get()
        ]);
    }

    public function updateIndex(Article $article) {
        return view('pages.admin.article.article-create-update', [
            'type_menu' => 'article',
            'article' => $article,
            'categories' => ArticleCategory::all()
        ]);
    }

    public function update(Article $article) {
        $data = request()->validate([
            'title' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'body' => 'required|string',
            'status' => 'required|in:publish,draft,pending',
            'tags' => 'required|string',
            'article_category_id' => 'required|exists:article_categories,id',
        ]);

        if(request()->file('thumbnail')){
            if (Storage::disk('public')->exists($article->thumbnail)) {
                Storage::disk('public')->delete($article->thumbnail);
            }
            $data['thumbnail'] = request()->file('thumbnail')->store('content', 'public');
        }

        $data['slug'] = Str::slug($data['title']);

        $article->update($data);

        return redirect('/artikel/daftar-artikel');
    }

    public function delete(Article $article) {
        $article->update([
            'deleted_at' => now()
        ]);

        return redirect('/artikel/daftar-artikel');
    }

    public function restore(Article $article) {
        $article->update([
            'deleted_at' => null
        ]);

        return redirect('/artikel/daftar-artikel');
    }

    public function destroy(Article $article) {
        if (Storage::disk('public')->exists($article->thumbnail)) {
            Storage::disk('public')->delete($article->thumbnail);
        }
        $article->delete();

        return redirect('/artikel/daftar-artikel');
    }

    public function show(Article $article) {
        return view('pages.admin.article.article-view', [
            'type_menu' => 'article',
            'article' => $article
        ]);
    }
}
