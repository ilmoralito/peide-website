@extends('layouts.backend')

@section('title', 'Pregunta comun')

@section('content')
    @include('event.bar')

    @include('event.tab')

    <div class="is-clearfix">
        <div class="block is-pulled-right">
            <a href="/admin/events/{{ $event->id }}/faqs/{{ $faq->id }}/edit" class="button is-primary is-outlined">
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>

            <form action="/admin/events/{{ $event->id }}/faqs/delete" method="POST" class="is-pulled-right" style="margin-left: 5px;">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="hidden" name="id" value="{{ $faq->id }}">

                <button type="submit" class="button is-danger is-outlined">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
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