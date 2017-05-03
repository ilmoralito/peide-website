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

@if (isset($post))
    <div class="field">
        <p class="control">
            <label for="is_published" class="checkbox">
                <input
                    type="checkbox"
                    name="is_published"
                    id="is_published"
                    @if ($post->is_published) checked @endif>
                Publicar
            </label>
        </p>
    </div>
@endif
