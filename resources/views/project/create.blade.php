@extends('layouts.backend')

@section('title', 'Crear proyecto')

@section('content')
    <form action="/admin/projects/store" method="POST" autocomplete="off">
        {{ csrf_field() }}

        <div class="field">
            <label for="name">Nombre</label>

            <p class="control">
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="input">
            </p>
        </div>

        <div class="field">
            <label for="description">Descripcion</label>

            <p class="control">
                <input type="text" name="description" id="description" value="{{ old('description') }}" class="input">
            </p>
        </div>

        <div class="field">
            <label for="url">URL</label>

            <p class="control">
                <input type="text" name="url" id="url" value="{{ old('url') }}" class="input" placeholder="http://">
            </p>
        </div>

        <div class="field">
            <label for="body">Contenido</label>

            <p class="control">
                <textarea name="body" id="body" class="textarea">{{ old('body') }}</textarea>
            </p>
        </div>

        <p class="field">
            <button type="submit" class="button is-primary">Agregar</button>
        </p>

        @include('partials.errors')
    </form>

    @include('partials.message')
@endsection
