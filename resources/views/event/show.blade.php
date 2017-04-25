@extends('layouts.backend')

@section('title', 'Evento')

@section('content')
    @include('event.bar')

    @include('event.tab')

    <table class="table">
        <colgroup>
            <col span="1" style="width: 25%;">
            <col span="1" style="width: 75%;">
        </colgroup>
        <tbody>
            <tr>
                <td>Imagen</td>
                <td>
                    <figure class="image">
                        <img src="{{ $event->image }}" alt="{{ $event->name }}">
                    </figure>
                </td>
            </tr>
            <tr>
                <td>Estado</td>
                <td>
                    <strong>{{ $event->is_published ? 'Publicado' : 'Sin publicar' }}</strong>
                </td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>{{ $event->name }}</td>
            </tr>
            <tr>
                <td>Ubicación</td>
                <td>{{ $event->address }}</td>
            </tr>
            <tr>
                <td>Precio</td>
                <td>
                    @if ($event->price > 0)
                        {{ $event->price }} dolares
                    @else
                        Gratuito
                    @endif
                </td>
            </tr>
            <tr>
                <td>Descripción</td>
                <td>{{ $event->description }}</td>
            </tr>
        </tbody>
    </table>
@endsection