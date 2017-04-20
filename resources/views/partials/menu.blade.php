<aside class="menu">
    <p class="menu-label">General</p>

    <ul class="menu-list">
        <li>
            <a href="#">Eventos</a>
        </li>
        <li>
            <a href="/admin/posts" class="{{ $controller == 'PostController' ? 'is-active' : '' }}">
                Publicaciones
            </a>
        </li>
        <li>
            <a href="/admin/tags" class="{{ $controller == 'TagController' ? 'is-active' : '' }}">
                Etiquetas
            </a>
        </li>
        <li>
            <a href="/admin/projects" class="{{ $controller == 'ProjectController' ? 'is-active' : '' }}">
                Proyectos
            </a>
        </li>
        <li>
            <a href="#">Alianzas</a>
        </li>
    </ul>

    <p class="menu-label">Administracion</p>

    <ul class="menu-list">
        <li><a href="#">Perfil</a></li>
        <li>
            <form action="/logout" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="button is-link">Cerrar sesion</button>
            </form>
        </li>
    </ul>
</aside>
