<nav class="nav has-shadow">
    <div class="nav-left">
        <a href="/" class="nav-item">
            PEIDE
        </a>
    </div>

    <span id="nav-toggle" class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
    </span>

    <div id="nav-menu" class="nav-right nav-menu">
        <a href="/" class="nav-item {{ $controller == 'HomeController' ? 'is-active is-tab' : '' }}">Home</a>
        <a href="/publications" class="nav-item {{ $controller == 'PostController' || $action == 'posts' ? 'is-active is-tab' : '' }}">Blog</a>
        <a href="/projectList" class="nav-item {{ $controller == 'ProjectController' ? 'is-active is-tab' : '' }}">Proyectos</a>
        <a href="/about" class="nav-item {{ $controller == 'AboutController' ? 'is-active is-tab' : '' }}">About us</a>
    </div>
</nav>
