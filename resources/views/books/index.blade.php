@extends('layout')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Список книг</h1>

    <!-- Фильтры -->
    <div class="row mb-4 g-3">
        @foreach($books as $book)
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="{{ asset('https://via.placeholder.com/400x200') }}" class="card-img-top" alt="Объявление">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->name }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                        <p class="fw-bold">Год: {{ $book->year }}</p>
                        <p class="fw-bold">Кол-во изображений: {{ count($book->images ?? []) }}</p>
                        <p class="fw-bold">Кол-во в избранном: 1</p>
                    </div>
                    <div class="d-flex justify-content-between p-2">
                        <a href="#" class="btn btn-success">Перейти</a>
                        <a  href="{{route('books.edit',$book)}}" class="btn btn-primary">Редактировать</a>
                        <a href="{{route('books.destroy',$book)}}" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
