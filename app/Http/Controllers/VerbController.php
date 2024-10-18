<?php

namespace App\Http\Controllers;

use App\Models\Verb;
use Illuminate\Http\Request;

class VerbController extends Controller
{
    public function index() {
        $verb = Verb::inRandomOrder()->first();
        $correctAnswer = $verb->present_er_sie_es;
        $wrongAnswers = Verb::where('id', '!=', $verb->id)
            ->inRandomOrder()
            ->limit(3)
            ->pluck('present_er_sie_es');

        $options = $wrongAnswers->push($correctAnswer)->shuffle();

        return view('verb.index', [
            'sentence' => "Er/Sie/Es _____ jeden Tag zur Schule.",
            'options' => $options,
            'correctAnswer' => $correctAnswer
        ]);
    }
}
