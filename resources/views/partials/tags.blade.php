<p>Etiquetas</p>

<ul>
    @foreach ($tags as $tag)
        <li>
            <a href="/publications/tags/{{ $tag->name }}">{{ $tag->name }}</a>
        </li>
    @endforeach
</ul>
