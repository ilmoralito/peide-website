@extends('layouts.backend')

@section('title', 'Editar etiqueta')

@section('content')
    <form action="/admin/tags/update" autocomplete="off" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $tag->id }}">

        @include('tags.form')

        <div class="field">
            <button type="submit" class="button is-primary">Actualizar</button>
        </div>

        @include('partials.errors')
    </form>
@endsection
