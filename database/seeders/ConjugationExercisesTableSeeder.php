<?php

namespace Database\Seeders;

use App\Http\Controllers\GrammarExerciseController;
use App\Models\ConjugationExercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConjugationExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises = [
            ['verb' => 'sein', 'tense' => 'Präsens', 'person' => 'ich', 'correct_form' => 'bin'],
            ['verb' => 'sein', 'tense' => 'Präsens', 'person' => 'du', 'correct_form' => 'bist'],
            ['verb' => 'sein', 'tense' => 'Präsens', 'person' => 'er/sie/es', 'correct_form' => 'ist'],
            ['verb' => 'haben', 'tense' => 'Präsens', 'person' => 'wir', 'correct_form' => 'haben'],
            ['verb' => 'haben', 'tense' => 'Präsens', 'person' => 'ihr', 'correct_form' => 'habt'],
            ['verb' => 'machen', 'tense' => 'Präsens', 'person' => 'sie/Sie', 'correct_form' => 'machen'],
            // Добавьте больше упражнений по вашему усмотрению
        ];

        foreach ($exercises as $exercise) {
            ConjugationExercise::create([
                'verb' => $exercise['verb'],
                'tense' => $exercise['tense'],
                'person' => $exercise['person'],
                'correct_form' => $exercise['correct_form'],
            ]);
        }
    }
}
