<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/registros/{id}/edit', [HomeController::class, 'edit'])->name('registros.edit');
Route::get('/api', 'ApiController@index');


