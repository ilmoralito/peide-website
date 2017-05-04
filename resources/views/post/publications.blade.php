@extends('layouts.master')

@section('hero')
    <div class="hero is-light">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Title</h1>
                <h2 class="subtitle">Subtitle</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Sit ipsum fuga voluptas explicabo eligendi sequi accusantium temporibus et ducimus nihil,
                    asperiores, possimus quae cum aut doloremque impedit soluta repellat officia!
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @if (count($posts))
        <div class="columns">
            <div class="column is-three-quarters">
                @foreach ($posts as $post)
                    <p>
                        <p>
                            <p style="margin-bottom: 0;">{{ $post->title }}</p>
                            
                            <small>
                                Por <a href="/publications/users/{{ $post->user->name }}">{{ $post->user->name }}</a> hace {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>

                        <a href="/posts/{{ $post->slug }}" class="button is-info is-outlined">
                            Saber mas
                        </a>
                    </p>
                @endforeach
            </div>

            <div class="column">
                @include('post.archives')

                @include('partials.tags')
            </div>
        </div>
    @else
        <div class="message">
            <div class="message-body">
                Sin articulos que mostrar
            </div>
        </div>
    @endif
@endsection
