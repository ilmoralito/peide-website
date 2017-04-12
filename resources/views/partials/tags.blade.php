<div class="box">
    <p class="field">Etiquetas</p>

    @foreach ($tags as $tag)
        <div class="field">
            <a href="#">
                <span class="tag is-primary">{{ $tag->name }}</span>
            </a>
        </div>
    @endforeach
</div>
