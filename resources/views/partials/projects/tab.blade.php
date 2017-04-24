<div class="tabs is-boxed">
    <ul>
        <li class="{{ $action == 'show' ? 'is-active' : '' }}">
            <a href="/admin/projects/show/{{ $project->id }}">Proyecto</a>
        </li>
        <li class="{{ $action == 'photos' ? 'is-active' : '' }}">
            <a href="/admin/projects/{{ $project->id }}/photos">Imagenes del projecto</a>
        </li>
        <li class="{{ in_array($action, ['faqs', 'createFaq', 'showFaq', 'editFaq']) ? 'is-active' : '' }}">
            <a href="/admin/projects/{{ $project->id }}/faqs">Preguntas comunes del projecto</a>
        </li>
    </ul>
</div>
