@extends('layouts.backend')

@section('title', 'Crear pregunta comun')

@section('content')
    @include('event.bar')

    @include('event.tab')

    <form action="/admin/events/{{ $event->id }}/faqs/store" method="POST" autocomplete="off">
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
            <button type="submit" class="button is-primary">Guardar</button>
        </div>

        @include('partials.errors')
    </form>

    @include('partials.message')
@endsection