@extends('layouts.backend')

@section('title', 'Agregar etiqueta')

@section('content')
    <form action="/admin/tags" method="POST" autocomplete="off">
        {{ csrf_field() }}

        @include('tags.form')

        <div class="field">
            <button type="submit" class="button is-primary">Agregar</button>
        </div>

        @include('partials.errors')
    </form>

    @include('partials.message')
@endsection
