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
