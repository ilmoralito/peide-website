@extends('layouts.backend')

@section('title', 'Proyecto')

@section('content')
    @include('partials.projects.bar')

    @include('partials.projects.tab')

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
                <td>Ficha</td>
                <td>{{ $project->slug }}</td>
            </tr>
            <tr>
                <td>Estado</td>
                <td>
                    <strong>
                        @if ($project->is_published)
                            Publicado
                        @else
                            Sin publicar
                        @endif
                    </strong>
                </td>
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
                <td>{!! $project->body !!}</td>
            </tr>
        </tbody>
    </table>
@endsection
