<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['posts']
        ]);
    }

    public function index()
    {
        return view('tags.index', [ 'tags' => Tag::orderBy('name', 'asc')->get() ]);
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(TagRequest $request)
    {
        $tag = new Tag;

        $tag->name = request('name');

        $tag->save();

        session()->flash('message', 'Etiqueta agregada');
        return redirect()->route('createTag');
    }

    public function edit(Tag $tag)
    {
        return view('tags/edit', [ 'tag' => $tag ]);
    }

    public function update(TagRequest $request, Tag $tag)
    {
        $tag->name = request('name');

        $tag->save();

        session()->flash('message', 'Etiqueta actualizada');
        return redirect()->route('editTag', [$tag]);
    }

    public function destroy()
    {
        Tag::findOrFail(request()->id)->delete();

        session()->flash('message', 'Etiqueta eliminada');
        return redirect()->route('tags');
    }

    public function posts(Tag $tag)
    {
        $posts = $tag->posts()->where('is_published', 1)->get();

        return view('post.publications', compact('posts'));
    }
}
