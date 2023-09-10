<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home')->with([
            'articles' => Article::latest()->take(6)->get(),
        ]);
    }
}
