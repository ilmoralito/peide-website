@foreach ($tags as $tag)
    <div class="field">
        <p class="control">
            <label class="checkbox">
                <input
                    type="checkbox"
                    name="tags[]"
                    id="tags"
                    value="{{ $tag->id }}"
                    {{--
                        @if ($post->tags->contains('id', $tag->id))
                            checked=true
                        @else

                        @endif
                    --}}>
                {{ $tag->name }}
            </label>
        </p>
    </div>
@endforeach
