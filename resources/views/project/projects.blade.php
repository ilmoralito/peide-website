@extends('layouts.backend')

@section('title', 'Proyectos')

@section('content')
    <div class="is-clearfix">
        <a href="/admin/projects/create" class="button is-primary is-outlined is-pulled-right">Crear projecto</a>
    </div>

    @if (count($projects))
        <table class="table">
            <colgroup>
                <col span="1" style="width: 90%;">
                <col span="1" style="width: 10%;">
            </colgroup>
            <thead>
                <tr>
                    <th>Nombre del proyecto</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>
                            <a href="projects/show/{{ $project->id }}">Administrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <br>
        <div class="message">
            <div class="message-body">Sin proyectos que mostrar</div>
        </div>
    @endif
@endsection