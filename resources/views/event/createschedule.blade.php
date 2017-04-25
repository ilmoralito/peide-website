@extends('layouts.backend')

@section('title', 'Crear horario')

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
            <label for="date">Fecha</label>

            <p class="control">
                <input type="text" name="date" id="date" value="{{ old('date') }}" class="input">
            </p>
        </div>

        <div class="field">
            <div class="field-body">
                <div class="field is-grouped">
                    <div class="field">
                        <label for="start_time">Hora de inicio</label>
                    
                        <p class="control">
                            {{-- <input type="text" name="start_time" id="start_time" value="{{ old('start_time') }}" class="input"> --}}
                            <select name="start_time" id="start_time" class="select is-fullwidth">
                                <option value="8">8:00</option>
                                <option value="9">9:00</option>
                                <option value="10">10:00</option>
                                <option value="11">11:00</option>
                                <option value="12">12:00</option>
                                <option value="01">01:00</option>
                                <option value="02">02:00</option>
                                <option value="03">03:00</option>
                                <option value="04">04:00</option>
                                <option value="05">05:00</option>
                            </select>
                        </p>
                    </div>
                    
                    <div class="field">
                        <label for="end_time">Hora de clausura</label>
                    
                        <p class="control">
                            {{-- <input type="text" name="end_time" id="end_time" value="{{ old('end_time') }}" class="input"> --}}
                            <select name="end_time" id="end_time" class="select is-fullwidth">
                                <option value="8">8:00</option>
                                <option value="9">9:00</option>
                                <option value="10">10:00</option>
                                <option value="11">11:00</option>
                                <option value="12">12:00</option>
                                <option value="01">01:00</option>
                                <option value="02">02:00</option>
                                <option value="03">03:00</option>
                                <option value="04">04:00</option>
                                <option value="05">05:00</option>
                            </select>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="field">
            <button type="submit" class="button is-primary">Guardar</button>
        </div>

        @include('partials.errors')
    </form>

    @include('partials.message')
@endsection