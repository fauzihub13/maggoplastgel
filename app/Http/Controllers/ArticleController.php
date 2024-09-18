<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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

        $data['user_id'] = User::first()->id;
        $data['slug'] = Str::slug($data['title']);
        // $data['thumbnail'] = "https://likmi.ac.id/wp-content/uploads/2022/07/kesehatan.jpg"; 

        $article = Article::create($data);

        return redirect('/artikel/daftar-artikel');

    }

    public function createIndex() {
        return view('pages.admin.article.article-create', [
            'type_menu' => 'article',
            'categories' => ArticleCategory::all()
        ]);
    }

    public function list() {
        return view('pages.admin.article.article-list', [
            'type_menu' => 'article',
            'articles' => Article::latest()->get()
        ]);
    }
}
