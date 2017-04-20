@extends('layouts.backend')

@section('title', 'Proyecto')

@section('content')
    <div class="is-clearfix">
        <div class="block is-pulled-right">
            <a href="/admin/projects/{{ $project->id }}/edit" class="button">Editar</a>
            <form action="/admin/projects/delete" method="POST" class="is-pulled-right" style="margin-left: 5px;">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <input type="hidden" name="id" value="{{ $project->id }}">

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
                <td>Nombre</td>
                <td>{{ $project->name }}</td>
            </tr>
            <tr>
                <td>Fecha de creacion</td>
                <td>{{ $project->created_at->diffForHumans() }}</td>
            </tr>
            <tr>
                <td>Actualizacion mas reciente</td>
                <td>{{ $project->updated_at->diffForHumans() }}</td>
            </tr>
            <tr>
                <td>Descripcion</td>
                <td>{{ $project->description }}</td>
            </tr>
            <tr>
                <td>URL</td>
                <td>
                    <a href="{{ $project->url }}" target="_blank">{{ $project->url }}</a>
                </td>
            </tr>
            <tr>
                <td>Contenido</td>
                <td>{{ $project->body }}</td>
            </tr>
        </tbody>
    </table>
@endsection
