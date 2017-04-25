@extends('layouts.backend')

@section('title', 'Horarios')

@section('content')
    @include('event.bar')

    @include('event.tab')

    @if (count($schedules))
        <div class="is-clearfix">
            <a href="/admin/events/{{ $event->id }}/schedules/create" class="button is-primary is-pulled-right">Crear horario</a>
        </div>

        {{-- TODO --}}
    @else
        <a href="/admin/events/{{ $event->id }}/schedules/create" class="button is-primary">Crear horario</a>
    @endif

    @include('partials.message')
@endsection