<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Laravel App')</title>
</head>
<body>
<header>
    <nav>
        <a href="{{route('site.say') }}">Головна</a> |
        <a href="{{route('entry.form') }}">Форма</a> |
        <a href="{{route('site.about') }}">Про застосунок</a> |
        <a href="{{route('site.contact') }}">Контакти</a>
    </nav>
</header>
<hr>
<main>
    @yield('content')
</main>
<hr>
<footer>
    <p>&copy; 2026 КПІ ім. Ігоря Сікорського</p>
</footer>
</body>
</html>
