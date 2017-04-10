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
            <div class="box">
                <p class="title">Blog post one title</p>
                <p class="subtitle">By author name in 2017-02-03</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, nisi dicta ullam enim illum quam tenetur natus asperiores cumque mollitia, deserunt optio odio voluptate magni beatae minima nesciunt numquam in.</p>

                <br>
                <a href="#" class="button is-small">Read more</a>
            </div>

            <div class="box">
                <p class="title">Blog post two title</p>
                <p class="subtitle">By author name in 2017-03-03</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, nisi dicta ullam enim illum quam tenetur natus asperiores cumque mollitia, deserunt optio odio voluptate magni beatae minima nesciunt numquam in.</p>

                <br>
                <a href="#" class="button is-small">Read more</a>
            </div>

            <div class="box">
                <p class="title">Blog post three title</p>
                <p class="subtitle">By author name in 2016-10-12</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, nisi dicta ullam enim illum quam tenetur natus asperiores cumque mollitia, deserunt optio odio voluptate magni beatae minima nesciunt numquam in.</p>

                <br>
                <a href="#" class="button is-small">Read more</a>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <p>Archivos</p>

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

            <div class="box">
                <p>Etiquetas</p>
                <div class="field">
                    <a href="#">
                        <span class="tag is-primary">Tag name one</span>
                    </a>
                </div>
                <div class="field">
                    <a href="#">
                        <span class="tag is-primary">Tag two</span>
                    </a>
                </div>
                <div class="field">
                    <a href="#">
                        <span class="tag is-primary">Tag three</span>
                    </a>
                </div>
                <div class="field">
                    <a href="#">
                        <span class="tag is-primary">Tag four</span>
                    </a>
                </div>
                <div class="field">
                    <a href="#">
                        <span class="tag is-primary">Tag five</span>
                    </a>
                </div>
                <div class="field">
                    <a href="#">
                        <span class="tag is-primary">Tag name six</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
