<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Библиотека — Главная</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="#">Библиотека</a>
    <div class="ms-auto">
        <a class="btn btn-outline-light me-2" href="login.html">Создать книгу</a>
        <a class="btn btn-outline-light" href="register.html">Выйти</a>
    </div>
</nav>

@yield('content')
</body>
</html>
