@extends('layouts.backend')

@section('title', 'Proyectos')

@section('content')
    <div class="is-clearfix">
        <a href="/admin/projects/create" class="button is-primary is-pulled-right">Crear projecto</a>
    </div>

    @if (count($projects))
        <table class="table">
            <colgroup>
                <col span="1" style="width: 75%;">
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 5%;">
            </colgroup>
            <thead>
                <tr>
                    <th>Nombre del proyecto</th>
                    <td></td>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>
                            <a href="projects/{{ $project->id }}/faqs">
                                Administrar FAQ'S
                            </a>
                        </td>
                        <td>
                            <a href="projects/show/{{ $project->id }}">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="message">
            Sin proyectos que mostrar
        </div>
    @endif
@endsection