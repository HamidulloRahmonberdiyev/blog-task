<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:manager');        
    }

    public function index()
    {
        return view('admin.articles.index')->with([
            'articles' => Article::latest()->paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.articles.create')->with([
            'tags' => Tag::all(),
        ]);
    }

    public function store(StoreArticleRequest $request)
    {
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('articles', 'public');
        }

        $article = Article::create([
            'user_id' =>  auth()->user()->id,
            'title' =>  $request->title,
            'slug' =>  Str::slug($request->title),
            'short_text' =>  $request->short_text,
            'body' =>  $request->body,
            'photo' =>  $path,
        ]);

        if (isset($request->tags)) {
            foreach ($request->tags as $tag) {
                $article->tags()->attach($tag);
            }
        }

        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit')->with([
            'article' => $article,
            'tags' => Tag::all(),
        ]);
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        if ($request->hasFile('photo')) {
            if (isset($article->photo)) {
                Storage::delete('public/' . $article->photo);
            }            
            $path = $request->file('photo')->store('articles', 'public');
        }

        $article->update([
            'user_id' => $article->user_id,
            'title' =>  $request->title,
            'slug' =>  Str::slug($request->title),
            'short_text' =>  $request->short_text,
            'body' =>  $request->body,
            'photo' =>  $path,
        ]);

        if (isset($request->tags)) {
            foreach ($article->tags as $tag) {
                $article->tags()->detach($tag);
            }
            foreach ($request->tags as $tag) {
                $article->tags()->attach($tag);
            }
        }

        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        if (isset($article->photo)) {
            Storage::delete('public/' . $article->photo);
        }
        $article->delete();

        return redirect()->route('articles.index');
    }
}
