<?php

namespace App\Http\Controllers;

use App\Models\AudioExercise;
use Illuminate\Http\Request;

class AudioExerciseController extends Controller
{
    public function index()
    {
        $exercise = AudioExercise::inRandomOrder()->first();
        $options = collect([
            $exercise->correct_translation,
            $exercise->wrong_translation_1,
            $exercise->wrong_translation_2,
            $exercise->wrong_translation_3,
        ])->shuffle();

        return view('audio.index', [
            'exercise' => $exercise,
            'options' => $options,
        ]);
    }

    public function check(Request $request)
    {
        $selectedAnswer = $request->input('answer');
        $correctAnswer = $request->input('correctAnswer');

        if ($selectedAnswer === $correctAnswer) {
            return redirect()->back()->with('success', 'Правильный ответ!');
        } else {
            return redirect()->back()->with('error', 'Неправильный ответ. Попробуйте снова.');
        }
    }
}
