@extends('layouts.backend')

@section('title', 'Usuario')

@section('content')
    @include('user.tab')

    <div class="columns">
        <div class="column">
            <form action="/admin/user/update" method="POST" autocomplete="off">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
            
                <div class="field">
                    <label for="name">Nombre y apellido</label>
            
                    <p class="control">
                        <input type="text" name="name" id="name" value="{{ $user->name }}" class="input">
                    </p>
                </div>
            
                <div class="field">
                    <label for="email">Correo electronico</label>
            
                    <p class="control">
                        <input type="email" name="email" id="email" value="{{ $user->email }}" class="input">
                    </p>
                </div>
            
                <div class="field">
                    <button type="submit" class="button is-primary is-outlined">Actualizar</button>
                </div>
            
                @include('partials.errors')
            </form>
        </div>
        <div class="column is-one-quarter">
            <figure class="image">
                <img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}">
                <span>{{ auth()->user()->name }}</span>
            </figure>
        </div>
    </div>

    @include('partials.message')
@endsection
