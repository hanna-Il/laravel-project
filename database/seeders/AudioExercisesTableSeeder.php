<?php

namespace Database\Seeders;

use App\Models\AudioExercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AudioExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AudioExercise::create([
            'audio_file' => 'audio/lesson_1.mp3',
            'correct_translation' => 'Я иду в школу',
            'wrong_translation_1' => 'Он идёт в магазин',
            'wrong_translation_2' => 'Мы играем в футбол.',
            'wrong_translation_3' => 'Она готовит ужин.',
        ]);

        AudioExercise::create([
            'audio_file' => 'audio/lesson_2.mp3',
            'correct_translation' => 'Они живут в Берлине.',
            'wrong_translation_1' => 'Я читаю книгу.',
            'wrong_translation_2' => 'Ты работаешь в офисе.',
            'wrong_translation_3' => 'Он водит машину.',
        ]);
    }
}
