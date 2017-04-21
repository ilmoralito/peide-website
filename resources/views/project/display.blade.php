@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
@endsection

@section('content')
    <div class="columns">
        <div class="column is-three-quarters">
            <div class="content">
                <p class="title">{{ $project->name }}</p>
                <p class="subtitle">{{ $project->description }}</p>
                @if ($project->url)
                    <p>
                        Sitio del proyecto: <a href="{{ $project->url }}">{{ $project->url }}</a>
                    </p>
                @endif

                <div class="carousel">
                    @foreach($project->projectPhotos as $photo)
                        <figure class="image">
                            <img src="{{ $photo->url }}" alt="">
                        </figure>
                    @endforeach
                </div>

                <p>Acerca del proyecto</p>
                <p class="content">{{ $project->body }}</p>
            </div>
        </div>

        <div class="column">
            @if (count($project->projectFaqs))
                <div class="content">
                    <p class="subtitle">Preguntas frecuentes</p>
                    
                    @foreach ($project->projectFaqs as $faq)
                        <div class="content">
                            <p class="subtitle">{{ $faq->question }}</p>
                    
                            <p>{{ $faq->answer }}</p>
                            <small>Ultima actualizacion: {{ $faq->updated_at->diffForHumans() }}</small>
                        </div>
                    @endforeach
                </div>

                @include('partials.faq')
            @else
                @include('partials.faq')
            @endif
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
