@extends('layouts.master')

@section('hero')
    <div class="hero is-medium is-info is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Title</h1>
                <h2 class="subtitle">
                    @lang('messages.welcome')
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
    <div class="columns">
        <div class="column is-two-thirds">
            <div class="columns">
                <div class="column">
                    <p>Mision</p>

                    <p>
                        Promover en los discentes y en la sociedad civil una actitud emprendedora
                        desarrollando valores humanísticos, liderazgo y competencias necesarias para que sean agentes de cambio
                        capaces de transformar su entorno económico y social
                    </p>
                </div>
                <div class="column">
                    <p>Vision</p>

                    <p>
                        Ser reconocidos a nivel nacional como un programa de formación integral
                        que le permita a los estudiantes emprendedores fortalecer sus competencias de liderazgo,
                        y revolucionar los procesos de desarrollo e innovación empresarial
                    </p>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>Alianzas</p>

                    <ul>
                        <li>
                            <a href="#">Red emprende nicaragua</a>
                        </li>
                        <li>
                            <a href="#" alt="Camara de comercio y servicios de Nicaragua">Camara de comercio y servicios de Nicaragua</a>
                        </li>
                        <li>
                            <a href="http://conicyt.gob.ni/" alt="Consejo Nicaragüense de Ciencia y Tecnología">Consejo Nicaragüense de Ciencia y Tecnología</a>
                        </li>
                        <li>
                            <a href="https://www.peacecorps.gov/" alt="Peace corps">Peace corps</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>Programas</p>

                    <ul>
                        <li><a href="#">lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <h5 class="title is-5">Contactanos</h5>

                <div class="content">
                    <p>
                        <span class="icon">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                        John Doe
                        <br>
                        <span class="icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </span>
                        john.doe@domain.subdomain
                        <br>
                        <span class="icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        (505) 8888 8878
                        (505) 7777 7878
                    </p>
                </div>

                <div class="content">
                    <p>O bien envianos un email</p>

                    <form method="POST" action="about" autocomplete="off">
                        {{ csrf_field() }}

                        <div class="field">
                            <label for="name">Nombre</label>
                            <p class="control">
                                <input type="text" name="name" id="name" class="input">
                            </p>
                        </div>

                        <div class="field">
                            <label for="name">Email</label>
                            <p class="control">
                                <input type="email" name="email" id="email" class="input">
                            </p>
                        </div>

                        <div class="field">
                            <label for="message">Mensaje</label>
                            <p class="control">
                                <textarea name="message" id="message" class="textarea"></textarea>
                            </p>
                        </div>

                        <button type="submit" class="button">Enviar</button>

                        @include('partials.errors')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
