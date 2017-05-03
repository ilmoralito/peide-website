<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['publications', 'publication']
        ]);
    }

    public function publications()
    {
        $posts = Post::latest()
            ->where('is_published', true)
            ->filter(request(['month', 'year']))
            ->get();

        return view('post.publications', compact('posts'));
    }

    public function publication($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('post.publication', compact('post'));
    }

    public function index()
    {
        $posts = auth()->user()->posts()->latest()->get();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post;

        $post->title = request('title');
        $post->body = request('body');
        $post->slug = str_slug(request('title'));

        auth()->user()->posts()->save($post);

        foreach (request('tags') as $tag) {
            $tagInstance = \App\Tag::find($tag);

            $post->tags()->attach($tagInstance);
        }

        return redirect()->route('posts');
    }

    public function show($id)
    {
        $post = Post::with('tags')->where([
            [ 'id', $id ],
            [ 'user_id', auth()->user()->id ]
        ])->first();

        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::with('tags')->where([
            [ 'id', $id ],
            [ 'user_id', auth()->user()->id ]
        ])->first();

        return view('post.edit', compact('post'));
    }

    public function update(PostRequest $postRequest, Post $post)
    {
        $post->title = request('title');
        $post->body = request('body');
        $post->slug = str_slug(request('title'));
        $post->is_published = request()->has('is_published');

        $post->save();
        $post->tags()->sync((request('tags')));

        session()->flash('message', 'Publicacion actualizada');
        return redirect()->route('showPost', $post);
    }

    public function destroy()
    {
        $post = Post::where([
            [ 'id', '=', request('id') ],
            [ 'user_id', '=', auth()->user()->id ]
        ])->first();

        $post->delete();

        session()->flash('message', 'La publicacion fue eliminada');
        return redirect()->route('posts');
    }
}
