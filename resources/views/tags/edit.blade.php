@extends('layouts.backend')

@section('title', 'Editar etiqueta')

@section('content')
    <div class="is-clearfix">
        <form action="/admin/tags/delete" method="POST" class="is-pulled-right">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
        
            <input type="hidden" name="id" value="{{ $tag->id }}">
        
            <button type="submit" class="button is-danger is-outlined">Eliminar</button>
        </form>
    </div>

    <form action="/admin/tags/{{ $tag->name }}/update" autocomplete="off" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        @include('tags.form')

        <div class="field">
            <p class="control">
                <button type="submit" class="button is-primary is-outlined">Actualizar</button>
            </p>
        </div>

        @include('partials.errors')
    </form>
@endsection
