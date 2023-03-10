<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/perfil.css">


    </head>
    <header>
        <nav>
            <a href="/meus_quotes/create">Adicionar trecho favorito</a>
            <a href="/minhas_marcacoes">Minhas marcações</a>
            <a href="/todas_marcacoes">Últimas marcações dos usuários</a>
            <a href="/perfil">Meu Perfil</a>
        </nav>
    </header>
    <body>
        @yield('content')
    </body>
</html>