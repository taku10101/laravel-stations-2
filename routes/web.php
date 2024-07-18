<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticeController;



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


// Route::get('URL', [Controllerの名前::class, 'Controller内のfunction名']);
Route::get('/practice', [PracticeController::class, 'sample']);
Route::get('/practice2', [PracticeController::class, 'sample2']);
Route::get('/practice3', [PracticeController::class, 'sample3']);