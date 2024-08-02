<?php

namespace App\Http\Controllers;

use App\Models\GrammarExercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GrammarExerciseController extends Controller
{
    public function index(Request $request)
    {
        $exercise = GrammarExercise::inRandomOrder()->first();
        $articles = ['der', 'die', 'das'];
        shuffle($articles);

        return view('grammar.index', [
            'exercise' => $exercise,
            'articles' => $articles
        ]);
    }

    public function check(Request $request)
    {
        $selectedArticle = $request->input('selected_article');
        $exercise = GrammarExercise::find($request->input('exercise_id'));

        if ($selectedArticle === $exercise->correct_article) {
            Session::increment('score');
            return redirect()->route('grammar.index')->with('success', 'Правильно!');
        } else {
            Session::put('score', 0);
            return redirect()->route('grammar.index')->with('error', 'Неправильно!');
        }
    }
}
