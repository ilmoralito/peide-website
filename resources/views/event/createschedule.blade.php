@extends('layouts.backend')

@section('title', 'Crear horario')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
@endsection

@section('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

    <script>
        $('input[name="interval"]').daterangepicker({
            minDate: moment(),
            timePicker: true,
            timePickerIncrement: 15,
            locale: {
                format: 'YYYY-MM-DD h:mm',
                applyLabel: 'Aplicar',
                cancelLabel: 'Cancelar',
                fromLabel: 'Desde',
                toLabel: 'Hasta',
                customRangeLabel: 'Custom',
                weekLabel: 'S',
                daysOfWeek: [
                    'Do',
                    'Lu',
                    'Ma',
                    'Mi',
                    'Ju',
                    'Vi',
                    'Sa'
                ],
                monthNames: [
                    'Enero',
                    'Febrero',
                    'Marzo',
                    'Abril',
                    'Mayo',
                    'Junio',
                    'Julio',
                    'Agosto',
                    'Septiembre',
                    'Octubre',
                    'Noviembre',
                    'Diciembre'
                ],
                firstDay: 0
            }
        });
    </script>
@endsection

@section('content')
    @include('event.bar')

    @include('event.tab')

    <form action="/admin/events/{{ $event->id }}/schedules/store" method="POST" autocomplete="off">
        {{ csrf_field() }}

        <div class="field">
            <label for="location">Ubicacion</label>

            <p class="control">
                <input type="text" name="location" id="location" value="{{ old('location') }}" class="input">
            </p>
        </div>

        <div class="field">
            <label for="interval">Intervalo de fechas</label>

            <p class="control">
                <input type="date" name="interval" id="interval" value="{{ old('interval') }}" class="input">
            </p>
        </div>

        <div class="field">
            <button type="submit" class="button is-primary">Guardar</button>
        </div>

        @include('partials.errors')
    </form>

    @include('partials.message')
@endsection