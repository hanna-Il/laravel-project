<?php
use App\Http\Controllers\WordController;
use App\Http\Controllers\SentenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return redirect()->route('word.index');
});

Route::get('/words', [WordController::class, 'index'])->name('word.index');
Route::post('/words/check', [WordController::class, 'check'])->name('word.check');

Route::get('/sentences', [SentenceController::class, 'index'])->name('sentence.index');
Route::post('/sentences/check', [SentenceController::class, 'check'])->name('sentence.check');
