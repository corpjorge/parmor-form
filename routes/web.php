<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/guardar', [RecordController::class, 'guardar']);
Route::get('/hola', function () {
    return view('email.record');
});


