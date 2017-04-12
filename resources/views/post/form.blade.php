<div class="field">
    <label for="title">Titulo</label>

    <p class="control">
        <input type="text" name="title" id="title" value="{{ $post->title ?? old('title', '') }}" class="input">
    </p>
</div>

<div class="field">
    <label for="body">Contenido</label>

    <p class="control">
        <textarea name="body" id="body" class="textarea">{{ $post->body ?? old('body', '') }}</textarea>
    </p>
</div>

<label>Etiquetas</label>
@include('post.tags')
