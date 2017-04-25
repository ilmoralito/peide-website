@extends('layouts.backend')

@section('title', 'Crear evento')

@section('content')
    <form action="/admin/events/store" method="POST" autocomplete="off" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="field">
            <label for="name">Titulo del evento</label>

            <p class="control">
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="input">
            </p>
        </div>

        <div class="field">
            <label for="price">Precio</label>

            <p class="control">
                <input type="number" name="price" id="price" value="{{ old('price') }}" class="input" placeholder="Colocar 0 para gratuito" min="0">
            </p>
        </div>

        <div class="field">
            <label for="address">Direccion</label>

            <p class="control">
                <input type="text" name="address" id="address" value="{{ old('address', 'UCC, León') }}" class="input">
            </p>
        </div>

        <div class="field">
            <label for="image">Imagen</label>

            <div class="control">
                <input type="file" name="image" id="image">
            </div>
        </div>

        <div class="field">
            <label for="description">Descripcion</label>

            <p class="control">
                <textarea name="description" id="description" class="textarea">{{ old('description') }}</textarea>
            </p>
        </div>

        <div class="field">
            <button type="submit" class="button is-primary">Agregar</button>
        </div>

        @include('partials.errors')
    </form>

    @include('partials.message')
@endsection