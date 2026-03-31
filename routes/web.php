<?php

use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\BookController;
use Illuminate\Support\Facades\Route;

//dd(\Illuminate\Support\Facades\Hash::make('book2215'));
//$2y$12$fDMINKjTGWt4nE8eEaHbEeq.rlvb7UG/pTCYZnPteLGZD.g115Fie
Route::prefix('admin')->group(function (){



Route::get('/login', [AuthController::class, 'login'])
    ->name('login');
Route::post('/loginSend', [AuthController::class, 'loginSend'])
    ->name('login.send');

    Route::get('books/{book}/destroy', [BookController::class,'destroy'])
        ->name('books.destroy');

    Route::get('/books/{book}/edit', [BookController::class,'edit'])
        ->name('books.edit');

    Route::post('/books/{book}/edit', [BookController::class,'update'])
        ->name('books.update');

    Route::get('/books/{book}/show', [BookController::class,'show'])
        ->name('books.show');



    Route::middleware('auth')->group(function () {

        Route::get('/books/create',[BookController::class,'create'])
            ->name('books.create');

        Route::post('/books/create',[BookController::class,'store'])
            ->name('books.store');

        Route::get('/logout', [AuthController::class, 'logout'])
            ->name('logout');

        Route::get('/',[BookController::class,'index'])
            ->name('admin-panel');

        Route::get('/logout', [AuthController::class, 'logout'])
            ->name('logout');
    });
});
