@extends('layouts.backend')

@section('title', 'Preguntas comunes')

@section('content')
    @include('partials.projects.bar')

    @include('partials.projects.tab')

    @if (count($projectFaqs))
        <a href="/admin/projects/{{ $project->id }}/faqs/create" class="button is-primary is-outlined is-pulled-right">Crear FAQ</a>

        <table class="table">
            <colgroup>
                <col span="1" style="width: 95%;">
                <col span="1" style="width: 5%;">
            </colgroup>

            <thead>
                <tr>
                    <th>Pregunta</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($projectFaqs as $faq)
                    <tr>
                        <td>{{ $faq->question }}</td>
                        <td>
                            <a href="/admin/projects/{{ $project->id }}/faqs/show/{{ $faq->id }}">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <a href="/admin/projects/{{ $project->id }}/faqs/create" class="button is-primary is-outlined">Crear FAQ</a>
    @endif

    @include('partials.message')
@endsection
