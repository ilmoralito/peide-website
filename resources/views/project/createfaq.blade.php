@extends('layouts.backend')

@section('title', 'Crear FAQ')

@section('content')
    @include('partials.projects.bar')

    @include('partials.projects.tab')

    <form action="/admin/projects/{{ $project->id }}/faqs/store" method="POST" autocomplete="off">
        {{ csrf_field() }}

        <div class="field">
            <label for="question">Pregunta</label>

            <p class="control">
                <input type="text" name="question" id="question" value="{{ old('question') }}" class="input">
            </p>
        </div>

        <div class="field">
            <label for="answer">Respuesta</label>

            <p class="control">
                <textarea name="answer" id="answer" class="textarea">{{ old('answer') }}</textarea>
            </p>
        </div>
        
        <div class="field">
            <button type="submit" class="button is-primary">Agregar</button>
        </div>

        @include('partials.errors')

        @include('partials.message')
    </form>
@endsection
