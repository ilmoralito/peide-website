@extends('layouts.master')

@section('hero')
    <div class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Title</h1>
                <h2 class="subtitle">Subtitle</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Sit ipsum fuga voluptas explicabo eligendi sequi accusantium temporibus et ducimus nihil,
                    asperiores, possimus quae cum aut doloremque impedit soluta repellat officia!

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ut, officia beatae enim blanditiis perspiciatis non ipsam eos quo laudantium accusamus veritatis,
                    aperiam libero! Error, labore tempore sequi. Veritatis, temporibus, consequuntur!

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ut, officia beatae enim blanditiis perspiciatis non ipsam eos quo laudantium accusamus veritatis,
                    aperiam libero! Error, labore tempore sequi. Veritatis, temporibus, consequuntur!
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="columns">
        <div class="column is-three-quarters">
            @if (count($posts))
                @foreach ($posts as $post)
                    <div class="box">
                        <p class="title">{{ $post->title }}</p>
                        <p class="subtitle">Por {{ $post->user->name }} en {{ $post->created_at }}</p>

                        <p class="field">{{ $post->body }}</p>

                        <a href="#" class="button">Leer mas</a>
                    </div>
                @endforeach
            @else
                <div class="notification">
                    Sin articulos que mostrar
                </div>
            @endif
        </div>
        <div class="column">
            <div class="box">
                <p class="field">Archivos</p>

                <ul>
                    <li>
                        <a href="#">Abril 2017</a>
                    </li>
                    <li>
                        <a href="#">Marzo 2017</a>
                    </li>
                    <li>
                        <a href="#">Febrero 2017</a>
                    </li>
                    <li>
                        <a href="#">Enero 2017</a>
                    </li>
                    <li>
                        <a href="#">Diciembre 2016</a>
                    </li>
                </ul>
            </div>

            @include('partials.tags')
        </div>
    </div>
@endsection
