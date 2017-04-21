<div class="tabs is-centered is-boxed">
    <ul>
        <li class="{{ $action == 'show' ? 'is-active' : '' }}">
            <a href="/admin/projects/show/{{ $project->id }}">Proyecto</a>
        </li>
        <li class="{{ $action == 'photos' ? 'is-active' : '' }}">
            <a href="/admin/projects/{{ $project->id }}/photos">Imagenes del projecto</a>
        </li>
    </ul>
</div>
