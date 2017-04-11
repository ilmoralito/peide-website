<!DOCTYPE html>
<html lang="en">
<head>
    <title>PEIDE @yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <nav class="nav has-shadow">
        <div class="nav-left">
            <div class="nav-item">
                <a href="/admin/dashboard">PEIDE - DASHBOARD</a>
            </div>
        </div>
    </nav>

    <div class="container is-fluid">
        <br>
        <div class="columns">
            <div class="column is-one-quarter">
                @include('partials.menu')
            </div>
            <div class="column">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>