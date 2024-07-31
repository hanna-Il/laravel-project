<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WordController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->session()->has('passed_words')) {
            $request->session()->put('passed_words', []);
        }

        if (!$request->session()->has('score')) {
            $request->session()->put('score', 0);
        }

        if (!$request->session()->has('mode')) {
            $request->session()->put('mode', 'german_to_russian'); //default mode
        }

        $passedWords = $request->session()->get('passed_words');
        $mode = $request->session()->get('mode');

        $word = DB::table('words')->WhereNotIn('id', $passedWords)->inRandomOrder()->first();

        if(!$word) {
            $request->session()->forget('passed_words');
            $word = DB::table('words')->inRandomOrder()->first();
        }

        $options = DB::table('words')->where('id', '!=', $word->id)->inRandomOrder()->limit(3)->get();

        $options->push($word);

        $options = $options->shuffle();

        return view('words.index', [
            'word' => $word,
            'options' => $options,
            'score' => $request->session()->get('score')
        ]);
    }

    public function check(Request $request): JsonResponse
    {
        $word = DB::table('words')->find($request->word_id);
        $mode = $request->session()->get('mode');

        if ($mode === 'german_to_russian') {
                $correct = $word->russian === $request->selected_option;
            } else {
                $correct = $word->german === $request->selected_option;
            }

        if ($correct) {
            $request->session()->increment('score');
        } else {
            $request->session()->put('score', 0);
        }

        $passedWords = $request->session()->get('passed_words');
        $passedWords[] = $word->id;
        $request->session()->put('passed_words', $passedWords);

        return response()->json(['correct' => $correct, 'score' => $request->session()->get('score')]);
    }

    public function toggleMode(Request $request)
    {
        $currentMode = $request->session()->get('mode', 'german_to_russian');
        $newMode = ($currentMode === 'german_to_russian') ? 'russian_to_german' : 'german_to_russian';
        $request->session()->put('mode', $newMode);

        return redirect('/');
    }
}
