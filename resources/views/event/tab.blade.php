<div class="tabs is-boxed">
    <ul>
        <li class="{{ $action == 'show' ? 'is-active' : '' }}">
            <a href="/admin/events/show/{{ $event->id }}">Evento</a>
        </li>
        <li class="{{ in_array($action, ['schedules', 'createSchedule']) ? 'is-active' : '' }}">
            <a href="/admin/events/{{ $event->id }}/schedules">Horario</a>
        </li>
        <li class="{{ in_array($action, ['faqs', 'createFaq', 'showFaq', 'editFaq']) ? 'is-active' : '' }}">
            <a href="/admin/events/{{ $event->id }}/faqs">Preguntas comunes</a>
        </li>
    </ul>
</div>
