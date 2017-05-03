<p>Archives</p>

<ul>
    @foreach ($archives as $archive)
        <li>
            <a href="?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
                {{ $archive['month'] }} {{ $archive['year'] }}
            </a>
        </li>
    @endforeach
</ul>