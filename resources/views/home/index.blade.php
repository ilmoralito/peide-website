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
                        <a href="projects/{{ $project->slug }}" class="button is-info">Saber mas</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="section">
        <div class="columns">
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image">
                            <img src="https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/chocolate-2224998_640.jpg" alt="Image One">
                        </figure>
                    </div>

                    <div class="card-content">
                        <div class="content">
                            <p>FREE</p>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="#" class="card-footer-item">Saber mas</a>
                        <a href="#" class="card-footer-item">Compartir</a>
                    </div>
                </div>
            </div>

            <div class="column is-9">
                <p>LUNES, 26 NOVIEMBRE 8:00 PM</p>

                <p class="subtitle">Instrumentos musicales</p>

                <p>
                    <span class="icon is-small">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                    <small>Universidad de Ciencias Comerciales, Leon Nicaragua, Frente al campus medico</small>
                </p>

                <p>
                    <span class="icon is-small">
                        <i class="fa fa-tag" aria-hidden="true"></i>
                    </span>
                    <a href="#"><small>Foot</small></a>
                    <a href="#"><small>Culture</small></a>
                    <a href="#"><small>Leon</small></a>
                </p>
            </div>
        </div>

        <div class="columns">
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image">
                            <img src="https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/paper-182220_640.jpg" alt="Image One">
                        </figure>
                    </div>

                    <div class="card-content">
                        <div class="content">
                            <p>FREE</p>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="#" class="card-footer-item">Saber mas</a>
                        <a href="#" class="card-footer-item">Compartir</a>
                    </div>
                </div>
            </div>

            <div class="column is-9">
                <p>LUNES, 26 NOVIEMBRE 8:00 PM</p>

                <p class="subtitle">Instrumentos musicales</p>

                <p>
                    <span class="icon is-small">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                    <small>Universidad de Ciencias Comerciales, Leon Nicaragua, Frente al campus medico</small>
                </p>

                <p>
                    <span class="icon is-small">
                        <i class="fa fa-tag" aria-hidden="true"></i>
                    </span>
                    <a href="#"><small>Foot</small></a>
                    <a href="#"><small>Culture</small></a>
                    <a href="#"><small>Leon</small></a>
                </p>
            </div>
        </div>

        <div class="columns">
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image">
                            <img src="https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/paper-182218_640.jpg" alt="Image One">
                        </figure>
                    </div>

                    <div class="card-content">
                        <div class="content">
                            <p>FREE</p>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="#" class="card-footer-item">Saber mas</a>
                        <a href="#" class="card-footer-item">Compartir</a>
                    </div>
                </div>
            </div>

            <div class="column is-9">
                <p>LUNES, 26 NOVIEMBRE 8:00 PM</p>

                <p class="subtitle">Instrumentos musicales</p>

                <p>
                    <span class="icon is-small">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                    <small>Universidad de Ciencias Comerciales, Leon Nicaragua, Frente al campus medico</small>
                </p>

                <p>
                    <span class="icon is-small">
                        <i class="fa fa-tag" aria-hidden="true"></i>
                    </span>
                    <a href="#"><small>Foot</small></a>
                    <a href="#"><small>Culture</small></a>
                    <a href="#"><small>Leon</small></a>
                </p>
            </div>
        </div>
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