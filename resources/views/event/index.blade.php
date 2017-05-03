@extends('layouts.backend')

@section('title', 'Eventos')

@section('content')
    @if (count($events))
        <div class="is-clearfix">
            <a href="/admin/events/create" class="button is-primary is-outlined is-pulled-right">Crear evento</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Eventos</th>
                    <th width="1"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>
                            <a href="/admin/events/show/{{ $event->id }}">Administrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="is-clearfix">
            <a href="/admin/events/create" class="button is-primary is-outlined is-pulled-right">Crear evento</a>
        </div>
    @endif

    @include('partials.message')
@endsection