<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('partials.nav')

    <div class="container">
        <div class="section">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>