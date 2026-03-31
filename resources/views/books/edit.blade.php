@extends('layout')
@section('content')
    <section class="container">



        <div class="container mt-5" style="max-width: 700px;">
            <h2 class="mb-4">Изменить книгу</h2>
            <form action="{{route('books.update',$book)}}" method="post" id="updateBook"  enctype="multipart/form-data">
                @csrf
                @include('books._form');-


                <button type="submit" class="btn btn-success">Опубликовать</button>
            </form>
        </div>
    </section>
@endsection

{{--@push('scripts')--}}
{{--    <script>alter('test')</script>--}}
{{--@endpush--}}
