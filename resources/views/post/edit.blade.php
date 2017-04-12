@extends('layouts.backend')

@section('title', 'Editar publicacion')

@section('content')
    <form action="/admin/posts/update" method="POST" autocomplete="off">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $post->id }}">

        @include('post.form')

        <div class="field">
            <button type="submit" class="button is-primary">Actualizar</button>
        </div>

        @include('partials.errors')
    </form>
@endsection