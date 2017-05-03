<!DOCTYPE html>
<html lang="en">
<head>
    <title>PEIDE</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/app.css">
    @yield('stylesheets')
</head>
<body>
    @include('partials.nav')

    @yield('hero')

    <div class="container">
        <div class="content" style="margin: 10px 0;">
            <div class="columns">
                <div class="column">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    @yield('scripts')
    <script src="/js/app.js"></script>
</body>
</html>