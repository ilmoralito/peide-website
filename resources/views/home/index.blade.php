@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
@endsection

@section('content')
    <div class="carousel">
        @foreach ($projects as $project)
            <div class="section hero {{ $heros[array_rand($heros, 1)] }} is-bold is-medium">
                <div class="container">
                    <div class="heading">
                        <p class="title">{{ $project->name }}</p>
                        <p class="subtitle">{{ str_limit($project->description, 30) }}</p>
                    </div>

                    <p class="field">{{ str_limit($project->body, 50) }}</p>
                    <p class="field">
                        <a href="projectList/display/{{ $project->id }}" class="button is-info">Saber mas</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="section">
        <p class="title">Suscribete a la lista de noticias</p>
        <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ipsa voluptates vero, quos odit ipsam quidem error unde doloremque sapiente dicta id tempore laborum cum reprehenderit, libero aspernatur aliquam perferendis.</p>

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