@extends('layouts.backend')

@section('title', 'Proyecto')

@section('content')
    <form action="/admin/projects/update" method="POST" autocomplete="off">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $project->id }}">

        <div class="field">
            <label for="name">Nombre</label>

            <p class="control">
                <input type="text" name="name" id="name" value="{{ $project->name ?? old(name) }}" class="input">
            </p>
        </div>

        <div class="field">
            <label for="description">Descripcion</label>

            <p class="control">
                <input type="text" name="description" id="description" value="{{ $project->description ?? old('description') }}" class="input">
            </p>
        </div>

        <div class="field">
            <label for="url">URL</label>

            <p class="control">
                <input type="text" name="url" id="url" value="{{ $project->url ?? old('url') }}" class="input" placeholder="http://">
            </p>
        </div>

        <div class="field">
            <label for="body">Contenido</label>

            <p class="control">
                <textarea name="body" id="body" class="textarea">{{ $project->body ?? old('body') }}</textarea>
            </p>
        </div>

        <p class="field">
            <button type="submit" class="button is-primary">Actualizar</button>
        </p>
        
        @include('partials.errors')
    </form>

    @include('partials.message')
@endsection
