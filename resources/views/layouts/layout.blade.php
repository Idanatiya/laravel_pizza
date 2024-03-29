<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5e621eabb9.js" crossorigin="anonymous"></script>

    <link href="/css/main.css" rel="stylesheet">
</head>

<body>
    @yield('content')
    @yield('welcome')
    <footer>
        <img class="mario-logo" src="/img/super-mario.png" alt="mario-logo" />
        Copyright 2021 Pizza house
    </footer>
</body>


</html>
