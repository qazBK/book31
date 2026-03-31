<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Библиотека — Главная</title>
    <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="{{route('admin-panel')}}">Библиотека</a>
    @auth()
    <div class="ms-auto">
        <a class="btn btn-outline-light me-2" href="{{route('books.create')}}">Создать книгу</a>
        <a class="btn btn-outline-light" href="{{route('login')}}">Выйти</a>
    </div>
    @endauth
    @guest()

    @endguest
</nav>

@yield('content')
</body>
</html>
