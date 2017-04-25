@extends('layouts.backend')

@section('title', 'Etiquetas')

@section('content')
    <div class="is-clearfix">
        <a href="/admin/tags/create" class="button is-primary is-pulled-right">Crear etiqueta</a>
    </div>

    @if (count($tags))
        <table class="table">
            <colgroup>
                <col span="1" style="width: 90%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 5%;">
            </colgroup>

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                </tr>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->name }}</td>
                            <td>
                                <a href="tags/{{ $tag->id }}/edit" class="button is-link is-small">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <form action="tags/delete" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="id" value="{{ $tag->id }}">

                                    <button type="submit" class="button is-link is-small">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    @else
        <p>Sin datos que mostrar</p>
    @endif
@endsection