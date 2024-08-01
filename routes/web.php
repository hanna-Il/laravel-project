<?php

use App\Http\Controllers\SentenceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

Route::get('/', [WordController::class, 'index']);
Route::post('/check', [WordController::class, 'check']);
Route::post('/toggle-mode', [WordController::class, 'toggleMode']);

Route::get('/sentence', [SentenceController::class, 'index'])->name('sentence.index');
Route::post('/sentence/check', [SentenceController::class, 'check'])->name('sentence.check');
