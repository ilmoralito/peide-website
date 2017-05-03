@extends('layouts.backend')

@section('title', 'Eventos')

@section('content')
    @include('event.bar')

    @include('event.tab')

    @if (count($faqs))
        <div class="is-clearfix">
            <a href="/admin/events/{{ $event->id }}/faqs/create" class="button is-primary is-outlined is-pulled-right">Crear FAQ</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Eventos</th>
                    <th width="1"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($faqs as $faq)
                    <tr>
                        <td>{{ $faq->question }}</td>
                        <td>
                            <a href="/admin/events/{{ $event->id }}/faqs/show/{{ $faq->id }}">Administrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <a href="/admin/events/{{ $event->id }}/faqs/create" class="button is-primary is-outlined">Crear FAQ</a>
    @endif

    @include('partials.message')
@endsection