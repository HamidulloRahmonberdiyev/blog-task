<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:manager']);        
    }

    public function index()
    {
        return view('dashboard')->with([
            'articles' => Article::all(),
            'tags' => Tag::all(),
            'users' => User::all(),
        ]);
    }
}
