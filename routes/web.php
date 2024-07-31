<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

Route::get('/', [WordController::class, 'index']);
Route::post('/check', [WordController::class, 'check']);
Route::post('/toggle-mode', [WordController::class, 'toggleMode']);

//Route::get('/', function () {
//    return view('welcome');
//});
