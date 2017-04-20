@extends('layouts.backend')

@section('title', 'Editar FAQ')

@section('content')
    <div class="is-clearfix">
        <a href="/admin/projects/{{ $project->id }}/faqs/show/{{ $faq->id }}" class="button is-primary is-pulled-right">Regresar</a>
    </div>

    <form action="/admin/projects/{{ $project->id }}/faqs/update" method="POST" autocomplete="off">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $faq->id }}">

        <div class="field">
            <label for="question">Pregunta</label>

            <p class="control">
                <input type="text" name="question" id="question" value="{{ $faq->question }}" class="input">
            </p>
        </div>

        <div class="field">
            <label for="answer">Respuesta</label>

            <p class="control">
                <textarea name="answer" id="answer" class="textarea">{{ $faq->answer }}</textarea>
            </p>
        </div>
        
        <div class="field">
            <button type="submit" class="button is-primary">Actualizar</button>
        </div>

        @include('partials.errors')

        @include('partials.message')
    </form>
@endsection
