<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/guru', [GuruController::class, 'index']);

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/kehadiran', function () {
    return view('kehadiran');
});

Route::get('/form-absen', function () {
    return view('form-absen');
});
