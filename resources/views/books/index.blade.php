@extends('layout')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Список книг</h1>

    <!-- Фильтры -->
    <div class="row mb-4 g-3">
        @foreach($books as $book)
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="{{$book->default_image ?: 'https://avatars.mds.yandex.net/i?id=424b03a1c5990d37fd6833cb1d240468_l-4347438-images-thumbs&n=13'}}" class="card-img-top" alt="Нетизображения" style="height: 420px;object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->name }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                        <p class="fw-bold">Год: {{ $book->year }}</p>
                        <p class="fw-bold">Кол-во изображений: {{ count($book->images ?? []) }}</p>
                        <p class="fw-bold">Кол-во в избранном: 1</p>
                    </div>
                    <div class="d-flex justify-content-between p-2">
                        <a href=""{{route('books.show',$book)}}"" class="btn btn-success">Перейти</a>
                        <a  href="{{route('books.edit',$book)}}" class="btn btn-primary">Редактировать</a>
                        <a href="{{route('books.destroy',$book)}}" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
