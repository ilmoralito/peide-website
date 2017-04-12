@extends('layouts.backend')

@section('title', 'Crear publicacion')

@section('content')
    <form action="/admin/posts/store" method="POST" autocomplete="off">
        {{ csrf_field() }}

        @include('post.form')

        <div class="field">
            <button type="submit" class="button is-primary">Agregar</button>
        </div>

        @include('partials.errors')
    </form>
@endsection