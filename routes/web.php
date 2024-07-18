<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\MovieController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/practice', function () {
    return 'practice';
});

Route::get('/practice2', function () {
    return 'practice2';
});

Route::get('/practice3', function () {
    return 'test';
});
Route::get('/getPractice', [PracticeController::class, 'getPractice']);
Route::get('/practice', [PracticeController::class, 'sample']);
Route::get('/practice2', [PracticeController::class, 'sample2']);
Route::get('/practice3', [PracticeController::class, 'sample3']);

Route::get('/movies', [MovieController::class, 'index']);