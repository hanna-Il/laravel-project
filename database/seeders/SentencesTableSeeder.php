<?php

namespace Database\Seeders;

use App\Models\Sentence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SentencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sentences = [
            ['sentence' => 'Ich liebe Programmieren', 'correct_order' => json_encode(['Ich', 'liebe', 'Programmieren'])],
            ['sentence' => 'Das Wetter ist schön heute', 'correct_order' => json_encode(['Das', 'Wetter', 'ist', 'schön', 'heute'])],
            ['sentence' => 'Ich gehe gerne spazieren', 'correct_order' => json_encode(['Ich', 'gehe', 'gerne', 'spazieren'])],
            ['sentence' => 'Er spielt Fußball jeden Sonntag', 'correct_order' => json_encode(['Er', 'spielt', 'Fußball', 'jeden', 'Sonntag'])],
            ['sentence' => 'Sie liest ein Buch im Park', 'correct_order' => json_encode(['Sie', 'liest', 'ein', 'Buch', 'im', 'Park'])]
        ];

        foreach ($sentences as $sentence) {
            Sentence::firstOrCreate($sentence);
        }
    }
}
