<?php

namespace App\Http\Controllers;

use App\Tag;

class TagController extends Controller
{
    public function index()
    {
        return view('tags.index', [ 'tags' => Tag::orderBy('name', 'asc')->get() ]);
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required'
        ]);

        $tag = new Tag;

        $tag->name = request('name');

        $tag->save();

        return redirect()->route('createTag');
    }

    public function edit(Tag $tag)
    {
        return view('tags/edit', [ 'tag' => $tag ]);
    }

    public function update()
    {
        $this->validate(request(),
            [ 'name' => 'required' ]
        );

        $tag = Tag::find(request()->id);

        $tag->name = request('name');
        $tag->save();

        return redirect()->route('editTag', [$tag]);
    }

    public function destroy()
    {
        $tag = Tag::find(request()->id);

        $tag->delete();

        return redirect()->route('tags');
    }
}
