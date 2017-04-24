@extends('layouts.backend')

@section('title', 'Preguntas comunes')

@section('content')
    @include('partials.projects.bar')

    @include('partials.projects.tab')

    <div class="is-clearfix">
        <a href="/admin/projects/{{ $project->id }}/faqs/create" class="button is-primary is-pulled-right">Crear FAQ</a>
    </div>

    @if (count($projectFaqs))
        <table class="table">
            <colgroup>
                <col span="1" style="width: 40%;">
                <col span="1" style="width: 55%;">
                <col span="1" style="width: 5%;">
            </colgroup>

            <thead>
                <tr>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($projectFaqs as $faq)
                    <tr>
                        <td>{{ $faq->question }}</td>
                        <td>{{ str_limit($faq->answer, 25) }}</td>
                        <td>
                            <a href="/admin/projects/{{ $project->id }}/faqs/show/{{ $faq->id }}">Mostrar</a>
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

    @include('partials.message')
@endsection
