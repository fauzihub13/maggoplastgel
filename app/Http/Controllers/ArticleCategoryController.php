<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function create(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:25',
        ]);

        $articleCategory = ArticleCategory::create($data);

        return response()->json([
            'message' => 'Article category created',
            'data' => $articleCategory,
        ], 201);
    }
}
