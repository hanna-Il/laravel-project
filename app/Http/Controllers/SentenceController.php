<?php

namespace App\Http\Controllers;

use App\Models\Sentence;
use Illuminate\Http\Request;

class SentenceController extends Controller
{
    public function index()
    {
        $sentence = Sentence::inRandomOrder()->first();
        $words = explode(" ", $sentence->sentence);
        shuffle($words);

        return view('sentence.index', [
            'sentenceId' => $sentence->id,
            'words' => $words
        ]);
    }

    public function check(Request $request)
    {
        $order = json_decode($request->input('order'));
        $sentence = Sentence::find($request->input('sentence_id'));

        if (implode(" ", $order) === $sentence->sentence) {
            return redirect()->route('sentence.index')->with('success', 'Правильно!');
        } else {
            return redirect()->route('sentence.index')->with('error', 'Неправильно! Попробуйте ещё раз.');
        }
    }
}
