@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
@endsection

@section('content')
    <div class="carousel">
        <div class="section hero is-primary is-bold is-medium">
            <div class="container">
                <div class="heading">
                    <p class="title">Project name</p>
                    <p class="subtitle">Project description</p>
                </div>

                <p class="field">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <p class="field">
                    <a href="#" class="button is-info">Saber mas</a>
                </p>
            </div>
        </div>

        <div class="section hero is-info is-medium">
            <div class="container">
                <div class="heading">
                    <p class="title">Project name</p>
                    <p class="subtitle">Project description</p>
                </div>

                <p class="field">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <p class="field">
                    <a href="#" class="button is-success">Saber mas</a>
                </p>
            </div>
        </div>

        <div class="section hero is-success is-medium">
            <div class="container">
                <div class="heading">
                    <p class="title">Project name</p>
                    <p class="subtitle">Project description</p>
                </div>

                <p class="field">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <p class="field">
                    <a href="#" class="button is-danger">Saber mas</a>
                </p>
            </div>
        </div>

        <div class="section is-medium">
            <div class="container">
                <div class="heading">
                    <p class="title">Project name</p>
                    <p class="subtitle">Project description</p>
                </div>

                <p class="field">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <p class="field">
                    <a href="#" class="button is-sucess">Saber mas</a>
                </p>
            </div>
        </div>

        <div class="section hero is-dark is-medium">
            <div class="container">
                <div class="heading">
                    <p class="title">Project name</p>
                    <p class="subtitle">Project description</p>
                </div>

                <p class="field">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <p class="field">
                    <a href="#" class="button is-warning">Saber mas</a>
                </p>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="columns">
            <div class="column">
                <p class="subtitle">Suscribete a la lista de noticias</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ipsa voluptates vero, quos odit ipsam quidem error unde doloremque sapiente dicta id tempore laborum cum reprehenderit, libero aspernatur aliquam perferendis.</p>
            </div>
            <div class="column">
                <form action="" method="POST">
                    <div class="field">
                        <label for="email">Email</label>

                        <div class="control">
                            <input type="email" name="email" id="email" class="input">
                        </div>
                    </div>

                    <div class="field">
                        <button type="submit" class="button">Suscribeme</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.carousel').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 5000
            });
        });
    </script>
@endsection