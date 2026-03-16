<?php

use Illuminate\Support\Facades\Route;

//dd(\Illuminate\Support\Facades\Hash::make('book2215'));
Route::get('/', function () {
    return view('index');
});
Route::get('/categories/{category}', function ($category){
    return view('index');
});
