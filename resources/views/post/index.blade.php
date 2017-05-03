@extends('layouts.backend')

@section('title', 'Publicaciones')

@section('content')
    <div class="is-clearfix">
        <a href="/admin/posts/create" class="button is-primary is-outlined is-pulled-right">Crear publicacion</a>
    </div>

    @if (count($posts))
        <table class="table">
            <thead>
                <tr>
                    <th>Titulo</th>
                </tr>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <a href="/admin/posts/show/{{ $post->id }}">
                                    {{ $post->title }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    @else
        <p>Sin datos que mostrar</p>
    @endif

    @include('partials.message')
@endsection