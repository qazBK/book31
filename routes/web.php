<?php

use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\BookController;
use Illuminate\Support\Facades\Route;

//dd(\Illuminate\Support\Facades\Hash::make('book2215'));
Route::get('/', function () {
    return view('admin-panel');
});
Route::get('/categories/{category}', function ($category){
    return view('index');
});

Route::get('/login', [AuthController::class, 'login'])
    ->name('login');
Route::post('/loginSend', [AuthController::class, 'loginSend'])
    ->name('login.send');

Route::get('/',[BookController::class,'index'])
    ->name('admin-panel');
