@extends('layouts.backend')

@section('title', 'Imagenes del proyecto')

@section('content')
    @include('partials.projects.bar')

    @include('partials.projects.tab')

    <div class="content">
        <div class="columns">
            <div class="column">
                @if (count($photos))
                    @foreach($photos as $photo)
                        <div class="card">
                            <div class="card-image">
                                <figure class="image">
                                    <img src="{{ $photo->url }}" alt="Test">
                                </figure>
                            </div>

                            <footer class="card-footer">
                                <form action="/admin/projects/{{ $project->id }}/photos/delete" method="POST" class="card-footer-item">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="id" value="{{ $photo->id }}">

                                    <button type="submit" class="button is-danger is-outlined is-fullwidth">
                                        Eliminar
                                    </button>
                                </form>
                            </footer>
                        </div>

                        <br>
                    @endforeach
                @else
                    <div class="message">
                        <div class="message-body">
                            Sin imagenes que mostrar
                        </div>
                    </div>
                @endif
            </div>
            <div class="column is-one-quarter">
                <form action="/admin/projects/{{ $project->id }}/photos/store" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="field">
                        <label for="url">Fotografia</label>

                        <div class="control">
                            <input type="file" name="url" id="url">
                        </div>
                    </div>

                    <div class="field">
                        <button type="submit" class="button is-primary is-outlined is-fullwidth">Subir</button>
                    </div>

                    @include('partials.errors')
                </form>
            </div>
        </div>
    </div>
@endsection
