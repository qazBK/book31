@extends('layout')
@section('content')
    <section class="container">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
                <h4 class="mb-4 text-center">Вход</h4>
                @error('status')
                <div class="alert alert-danger fs-2" id="errorMessage">
                    {{$message}}
                </div>
                @enderror
                <form action="{{route('login.send')}}" method="post" id="loginForm">
                    @csrf

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                        id="email"
                        name="email" value="{{old('email')}}" required>
                        @error('email')
                        <div class="invalid-feedback fs-3">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Пароль</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror"
                        id="password" name="password" required>
                        @error('password')
                        <div class="invalid-feedback fs-3">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Войти</button>
                </form>
            </div>
    </section>
@endsection
