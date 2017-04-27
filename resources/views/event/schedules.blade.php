@extends('layouts.backend')

@section('title', 'Horarios')

@section('content')
    @include('event.bar')

    @include('event.tab')

    @if (count($schedules))
        <div class="is-clearfix">
            <a href="/admin/events/{{ $event->id }}/schedules/create" class="button is-primary is-pulled-right">Crear horario</a>
        </div>

        <table class="table">
            <colgroup>
                <col span="1" style="width: 33.3%;">
                <col span="1" style="width: 33.3%;">
                <col span="1" style="width: 33.3%;">
                <col span="1" style="width: 5%;">
            </colgroup>

            <thead>
                <tr>
                    <th>Ubicacion</th>
                    <th>Hora de inicio</th>
                    <th>Hora de clausura</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->location }}</td>
                        <td>{{ $schedule->start_date }}</td>
                        <td>{{ $schedule->closing_date }}</td>
                        <td>
                            <a href="">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <a href="/admin/events/{{ $event->id }}/schedules/create" class="button is-primary">Crear horario</a>
    @endif

    @include('partials.message')
@endsection