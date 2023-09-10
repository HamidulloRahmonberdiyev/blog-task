<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index')->with([
            'articles' => Article::latest()->paginate(9),
        ]);
    }

    public function view(Request $request)
    {
        return view('articles.view')->with([
            'article' => Article::where('slug', $request->slug)->first(),
        ]);
    }
}
