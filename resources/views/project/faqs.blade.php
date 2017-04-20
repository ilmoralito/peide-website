@extends('layouts.backend')

@section('title', 'FAQ\'S')

@section('content')
    <div class="is-clearfix">
        <a href="/admin/projects/{{ $project->id }}/faqs/create" class="button is-primary is-pulled-right">Crear FAQ</a>
    </div>

    @if (count($projectFaqs))
        <table class="table">
            <caption>FAQS de {{ $project->name }}</caption>

            <colgroup>
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 75%;">
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
                        <td>{{ $faq->answer }}</td>
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
