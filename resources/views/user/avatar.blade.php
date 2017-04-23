@extends('layouts.backend')

@section('title', 'Usuario')

@section('content')
    @include('user.tab')

    <form action="/admin/user/avatar/store" method="POST" enctype="multipart/form-data" autocomplete="off">
        {{ csrf_field() }}

        <div class="field">
            <label for="avatar">Fotografia</label>

            <div class="control">
                <input type="file" name="avatar" id="avatar">
            </div>
        </div>

        <div class="field">
            <button type="submit" class="button is-primary">Subir</button>
        </div>

        @include('partials.errors')
    </form>

    @include('partials.message')
@endsection
