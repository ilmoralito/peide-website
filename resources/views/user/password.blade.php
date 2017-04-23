@extends('layouts.backend')

@section('title', 'Usuario')

@section('content')
    @include('user.tab')

    <form action="/admin/user/password/update" method="POST" autocomplete="off">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="field">
            <label for="password">Clave actual</label>

            <p class="control">
                <input type="password" name="password" id="password" class="input">
            </p>
        </div>

        <div class="field">
            <label for="newPassword">Nueva clave</label>

            <p class="control">
                <input type="password" name="newPassword" id="newPassword" class="input">
            </p>
        </div>

        <div class="field">
            <label for="repeatNewPassword">Repetir nueva clave</label>

            <p class="control">
                <input type="password" name="repeatNewPassword" id="repeatNewPassword" class="input">
            </p>
        </div>

        <div class="field">
            <button type="submit" class="button is-primary">Actualizar</button>
        </div>

        @include('partials.errors')
    </form>

    @include('partials.message')
@endsection
