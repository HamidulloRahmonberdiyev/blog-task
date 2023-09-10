<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Str;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:manager');        
    }

    public function index()
    {
        return view('admin.tags.index')->with([
            'tags' => Tag::paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(StoreTagRequest $request)
    {
        Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('tags.index');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit')->with([
            'tag' => $tag,
        ]);
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index');
    }
}
