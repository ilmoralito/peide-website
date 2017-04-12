@extends('layouts.backend')

@section('title', 'Publicaciones')

@section('content')
    <div class="is-clearfix">
        <a href="/admin/posts/create" class="button is-primary is-pulled-right">Crear publicacion</a>
    </div>

    @if (count($posts))
        <table class="table">
            <thead>
                <tr>
                    <th width="1" class="has-text-centered">#</th>
                    <th>Titulo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="has-text-centered">{{ $loop->iteration }}</td>
                            <td>
                                <a href="posts/show/{{ $post->id }}">{{ $post->title }}</a>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    @else
        <p>Sin datos que mostrar</p>
    @endif

    @if ($message = session('message'))
        <div class="notification">
            {{ $message }}
        </div>
    @endif
@endsection