<div class="tabs is-boxed">
    <ul>
        <li class="{{ $action == 'edit' ? 'is-active' : '' }}">
            <a href="/admin/user/edit">Perfil</a>
        </li>
        <li class="{{ $action == 'password' ? 'is-active' : '' }}">
            <a href="/admin/user/password">Cambiar clave</a>
        </li>
        <li class="{{ $action == 'avatar' ? 'is-active' : '' }}">
            <a href="/admin/user/avatar">Avatar</a>
        </li>
    </ul>
</div>
