@if (count($tags))
    <label for="tags" style="display: block; margin-bottom: 10px;">Etiquetas</label>

    @foreach ($tags as $tag)
        <div class="field">
            <p class="control">
                <label class="checkbox">
                    <input
                        type="checkbox"
                        name="tags[]"
                        @if (isset($post) && in_array($tag->id, $post->tags()->pluck('id')->all()))
                            checked
                        @endif
                        value="{{ $tag->id }}">
                        {{ $tag->name }}
                </label>
            </p>
        </div>
    @endforeach
@else
    <div class="box">
        <p>No hay etiquetas registradas</p>

        <p class="field">
            <p class="control">
                <a href="/admin/tags/create" class="button is-primary is-outlined is-fullwidth">Agregar</a>
            </p>
        </p>
    </div>
@endif