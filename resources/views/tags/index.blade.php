@extends('layouts.backend')

@section('title', 'Etiquetas')

@section('content')
    <div class="is-clearfix">
        <a href="/admin/tags/create" class="button is-primary is-outlined is-pulled-right">Crear etiqueta</a>
    </div>

    @if (count($tags))
        <table class="table">
            <colgroup>
                <col span="1" style="width: 95%;">
                <col span="1" style="width: 5%;">
            </colgroup>

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th></th>
                </tr>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->name }}</td>
                            <td>
                                <a href="tags/{{ $tag->name }}/edit">
                                    Editar
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