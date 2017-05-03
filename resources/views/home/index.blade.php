@extends('layouts.master')

@section('hero')
    <section class="hero is-primary is-bold" style="margin-bottom: 10px;">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Hero title</h1>
                <h2 class="subtitle">Hero subtitle</h2>

                <p class="field">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis harum, sapiente mollitia nihil hic debitis labore error maxime, nostrum dolorem nam ab quae reprehenderit et, veritatis numquam vitae adipisci.
                </p>
            </div>
        </div>
    </section>
@endsection

@section('content')
    @if (count($projects))
        <p class="subtitle">Proyectos</p>

        <div class="columns is-multiline">
            @foreach ($projects as $project)
                <div class="column is-half">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="{{ $project->projectPhotos()->first()->url }}" alt="{{ $project->name }}">
                            </figure>
                        </div>

                        <div class="card-content">
                            <div class="content">
                                {{ $project->name }}
                            </div>
                        </div>

                        <footer class="card-footer">
                            <div class="card-footer-item">
                                <a href="/projects/{{ $project->slug }}">Saber mas</a>
                            </div>
                        </footer>
                    </div>
                </div>
            @endforeach

            <div class="column">
                <p>
                    <a href="projectList" class="button is-outlined is-primary">Visita la lista de proyectos</a>
                </p>
            </div>
        </div>
    @endif

    @if (count($events))
        <p class="subtitle">Eventos</p>

        <div class="columns is-multiline">
            @foreach ($events as $event)
                <div class="column is-one-third">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="{{ $event->image }}" alt="{{ $event->name }}">
                            </figure>
                        </div>

                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    @if (count($event->schedules))
                                        {{ $event->schedules->first()->start_date }}
                                    @else
                                        Sin fecha de inicio programada
                                    @endif
                                </div>

                                <div class="media-content">
                                    
                                </div>
                            </div>

                            <div class="content">{{ $event->name }}</div>
                        </div>

                        <footer class="card-footer">
                            <a href="events/{{ $event->slug }}" class="card-footer-item">Saber mas</a>
                        </footer>
                    </div>
                </div>
            @endforeach

            <div class="column">
                <div>
                    <p>Mas informacion sobre alianzas, programas, etc...</p>

                    <div class="field">
                        <p class="control">
                            <a href="about" class="button is-info is-outlined">Contactanos</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
