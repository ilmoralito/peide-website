@extends('layouts.master')

@section('hero')
    <div class="hero is-light">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Title</h1>
                <h2 class="subtitle">
                    Subtitle
                </h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Sit ipsum fuga voluptas explicabo eligendi sequi accusantium temporibus et ducimus nihil,
                    asperiores, possimus quae cum aut doloremque impedit soluta repellat officia!

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ut, officia beatae enim blanditiis perspiciatis non ipsam eos quo laudantium accusamus veritatis,
                    aperiam libero! Error, labore tempore sequi. Veritatis, temporibus, consequuntur!
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @if (count($projects))
        @foreach ($projects as $project)
            <div class="content">
                <p class="title">{{ $project->name }}</p>
                <p class="subtitle">{{ $project->description }}</p>

                <p class="field">
                    <a href="projects/{{ $project->slug }}" class="button is-info">Saber mas</a>
                </p>
            </div>
        @endforeach
    @else
        <article class="message">
            <div class="message-body">Sin proyectos que mostrar</div>
        </article>
    @endif
@endsection
