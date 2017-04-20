@extends('layouts.backend')

@section('title', 'Crear proyecto')

@section('content')
    <div class="is-clearfix">
        <div class="block is-pulled-right">
            <a href="/admin/projects/{{ $project->id }}/faqs" class="button is-primary">Regresar</a>
            <a href="/admin/projects/{{ $project->id }}/faqs/{{ $faq->id }}/edit" class="button">Editar</a>
            <form action="/admin/projects/{{ $project->id }}/faqs/delete" method="POST" class="is-pulled-right" style="margin-left: 5px;">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="hidden" name="id" value="{{ $faq->id }}">

                <button type="submit" class="button is-danger">Eliminar</button>
            </form>
        </div>
    </div>

    <table class="table">
        <tbody>
            <tr>
                <td>Pregunta</td>
                <td>{{ $faq->question }}</td>
            </tr>
            <tr>
                <td>Respuesta</td>
                <td>{{ $faq->answer }}</td>
            </tr>
        </tbody>
    </table>

    @include('partials.message')
@endsection
