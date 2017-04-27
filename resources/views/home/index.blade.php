@extends('layouts.master')

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
@endsection

@section('content')
    <div class=" carousel">
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

    @if (count($events))
        <br>

        <table class="table">
            <caption>EVENTOS</caption>

            <colgroup>
                <col span="1" style="width: 40%;">
                <col span="1" style="width: 60%;">
            </colgroup>

            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image">
                                        <img src="{{ $event->image }}" alt="{{ $event->name }}">
                                    </figure>
                                </div>

                                <div class="card-content">
                                    <div class="content">
                                        <p>{{ $event->price > 0.00 ? $event->price : 'GRATIS' }}</p>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <a href="/events/{{ $event->slug }}" class="card-footer-item">Saber mas</a>
                                </div>
                            </div>
                        </td>

                        <td>
                            <p class="subtitle">{{ $event->name }}</p>

                            <p>
                                <span class="icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </span>
                                {{ $event->address }}
                            </p>

                            <p>
                                <span class="icon">
                                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                </span>
                                {{ $event->schedules[0]->start_date }}
                            </p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="message">
            <div class="message-body">
                No hay eventos proximos, puedes visitar <a href="#">archivos</a>
            </div>
        </div>
    @endif
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