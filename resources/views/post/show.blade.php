@extends('layouts.backend')

@section('title', 'Publicacion')

@section('content')
    <div class="is-clearfix">
        <div class="block is-pulled-right">
            <a href="/admin/posts/{{ $post->id }}/edit" class="button">Editar</a>
            <form action="/admin/posts/delete" method="POST" class="is-pulled-right" style="margin-left: 5px;">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="hidden" name="id" value="{{ $post->id }}">

                <button type="submit" class="button is-danger">Eliminar</button>
            </form>
        </div>
    </div>

    <table class="table">
        <colgroup>
            <col span="1" style="width: 25%;">
            <col span="1" style="width: 75%;">
        </colgroup>

        <tbody>
            <tr>
                <td>Titulo</td>
                <td>{{ $post->title }}</td>
            </tr>
            <tr>
                <td>Autor</td>
                <td>{{ $post->user->name }}</td>
            </tr>
            <tr>
                <td>Creado en la fecha</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            <tr>
                <td>Actualizado en la fecha</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
            <tr>
                <td>Etiquetas</td>
                <td>{{ $post->tags->pluck('name')->implode(', ') }}</td>
            </tr>
            <tr>
                <td colspan="2">Articulo</td>
            </tr>
            <tr>
                <td colspan="2">{{ $post->body }}</td>
            </tr>
        </tbody>
    </table>
@endsection
