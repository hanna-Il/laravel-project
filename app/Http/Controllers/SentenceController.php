<?php

namespace App\Http\Controllers;

use App\Models\Sentence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SentenceController extends Controller
{
    public function index()
    {
        $sentence = DB::table('sentences')->inRandomOrder()->first();
        $words = explode(' ', $sentence->sentence);
        shuffle($words);

        return view('sentence.index', [
            'words' => $words,
            'correctOrder' => $sentence->correct_order,
            'sentenceId' => $sentence->id,
        ]);
    }

    public function check(Request $request)
    {
        $sentence = Sentence::findOrFail($request->input('sentence_id'));
        $userOrder = $request->input('order');

        if ($userOrder === $sentence->correct_order) {
            return redirect()->back()->with('success', 'Correct!');
        } else {
            return redirect()->back()->with('error', 'Wrong!');
        }
    }
}
