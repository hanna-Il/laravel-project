<?php

use App\Http\Controllers\ConjugationExerciseController;
use App\Http\Controllers\GrammarExerciseController;
use App\Http\Controllers\SentenceController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('word.index');
});

Route::get('/words', [WordController::class, 'index'])->name('word.index');
Route::post('/words/check', [WordController::class, 'check'])->name('word.check');

Route::get('/sentences', [SentenceController::class, 'index'])->name('sentence.index');
Route::post('/sentences/check', [SentenceController::class, 'check'])->name('sentence.check');

Route::get('/grammar', [GrammarExerciseController::class, 'index'])->name('grammar.index');
Route::post('/grammar/check', [GrammarExerciseController::class, 'check'])->name('grammar.check');

Route::get('/conjugation', [ConjugationExerciseController::class, 'index'])->name('conjugation.index');
Route::post('/conjugation/check', [ConjugationExerciseController::class, 'check'])->name('conjugation.check');
