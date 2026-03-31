@extends('layout')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Список книг</h1>

    <!-- Фильтры -->
    <div class="row mb-4 g-3">

        <div class="col-md-6">
            <div class="card h-100">
                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Объявление">
                <div class="card-body">
                    <h5 class="card-title">Название</h5>
                    <p class="card-text">Описание</p>
                    <p class="fw-bold">Год: 1994</p>
                    <p class="fw-bold">Кол-во в избранном: 1</p>
                </div>
                <div class="d-flex justify-content-between p-2">
                    <a href="#" class="btn btn-success">Перейти</a>
                    <a href="#" class="btn btn-primary">Редактировать</a>
                    <a href="#" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Объявление">
                <div class="card-body">
                    <h5 class="card-title">Название</h5>
                    <p class="card-text">Описание</p>
                    <p class="fw-bold">Год: 1994</p>
                    <p class="fw-bold">Кол-во в избранном: 1</p>
                </div>
                <div class="d-flex justify-content-between p-2">
                    <a href="#" class="btn btn-success">Перейти</a>
                    <a href="#" class="btn btn-primary">Редактировать</a>
                    <a href="#" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
