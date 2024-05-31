<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mon site</title>
    </head>
    <body>
        <nav>
            <a href="./">Accueil</a>
            <a href="./login">Connexion</a>
            <a href="./register">Inscription</a>
            <a href="./logout">Logout</a>
        </nav>

        @yield('content')
    </body>
</html>
