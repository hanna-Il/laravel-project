<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $words = [
            ['german' => 'Hund', 'russian' => 'Собака'],
            ['german' => 'Sprechender', 'russian' => 'Говорить'],
            ['german' => 'Versuchen', 'russian' => 'Пытаться'],
            ['german' => 'Wort', 'russian' => 'Слово'],
            ['german' => 'Wissen', 'russian' => 'Знать'],
            ['german' => 'Bald', 'russian' => 'Скоро'],
            ['german' => 'Späte', 'russian' => 'Поздно'],
            ['german' => 'Späte', 'russian' => 'Поздно'],
            ['german' => 'Zug', 'russian' => 'Поезд'],
        ];

        foreach ($words as $word) {
            Word::create($word);
        }
    }
}
