<?php

use App\Http\Controllers\AudioExerciseController;
use App\Http\Controllers\ConjugationExerciseController;
use App\Http\Controllers\GrammarExerciseController;
use App\Http\Controllers\SentenceController;
use App\Http\Controllers\VerbController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('words.index');
});

Route::get('/words', [WordController::class, 'index'])->name('words.index');
Route::post('/words/check', [WordController::class, 'check'])->name('words.check');

Route::get('/sentences', [SentenceController::class, 'index'])->name('sentence.index');
Route::post('/sentences/check', [SentenceController::class, 'check'])->name('sentence.check');

Route::get('/grammar', [GrammarExerciseController::class, 'index'])->name('grammar.index');
Route::post('/grammar/check', [GrammarExerciseController::class, 'check'])->name('grammar.check');

Route::get('/conjugation', [ConjugationExerciseController::class, 'index'])->name('conjugation.index');
Route::post('/conjugation/check', [ConjugationExerciseController::class, 'check'])->name('conjugation.check');

Route::get('/verbs', [VerbController::class, 'index'])->name('verbs.index');
Route::post('/verbs/check', [VerbController::class, 'check'])->name('verbs.check');

Route::get('/audio', [AudioExerciseController::class, 'index'])->name('audio.index');
Route::post('/audio/check', [AudioExerciseController::class, 'check'])->name('audio.check');
