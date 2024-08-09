<?php

namespace App\Http\Controllers;

use App\Models\ConjugationExercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConjugationExerciseController extends Controller
{
    public function index(Request $request)
    {
        $exercise = ConjugationExercise::inRandomOrder()->first();
        $conjugations = ConjugationExercise::where('verb', $exercise->verb)
            ->where('tense', $exercise->tense)
            ->pluck('correct_form')
            ->toArray();
        shuffle($conjugations);

        return view('conjugation.index', [
            'exercise' => $exercise,
            'conjugations' => $conjugations
        ]);
    }

    public function check(Request $request)
    {
        $selectedForm = $request->input('selected_form');
        $exercise = ConjugationExercise::find($request->input('exercise_id'));

        if ($selectedForm === $exercise->correct_form) {
            Session::increment('score');
            return redirect()->route('conjugation.index')->with('success', 'Правильно!');
        } else {
            Session::put('score', 0);
            return redirect()->route('conjugation.index')->with('error', 'Неправильно!');
        }
    }
}
