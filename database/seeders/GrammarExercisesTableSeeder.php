<?php

namespace Database\Seeders;

use App\Models\GrammarExercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrammarExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises = [
            ['noun' => 'Tisch', 'correct_article' => 'der'],
            ['noun' => 'Lampe', 'correct_article' => 'die'],
            ['noun' => 'Buch', 'correct_article' => 'das'],
            ['noun' => 'Stuhl', 'correct_article' => 'der'],
            ['noun' => 'Fenster', 'correct_article' => 'das'],
        ];

        foreach ($exercises as $exercise) {
            GrammarExercise::create($exercise);
        }
    }
}
