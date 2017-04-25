@extends('layouts.backend')

@section('title', 'Crear pregunta comun')

@section('content')
    @include('event.bar')

    @include('event.tab')

    <form action="/admin/events/{{ $event->id }}/faqs/update" method="POST" autocomplete="off">
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
                <input type="text" name="answer" id="answer" value="{{ $faq->answer }}" class="input">
            </p>
        </div>

        <div class="field">
            <button type="submit" class="button is-primary">Actualizar</button>
        </div>

        @include('partials.errors')
    </form>

    @include('partials.message')
@endsection