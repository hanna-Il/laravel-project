<?php

namespace Database\Seeders;

use App\Models\Verb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VerbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Verb::create([
            'infinitive' => 'gehen',
            'present_ich' => 'gehe',
            'present_du' => 'gehst',
            'present_er_sie_es' => 'geht',
            'preterite' => 'ging',
            'perfect' => 'gegangen',
        ]);

        Verb::create([
            'infinitive' => 'machen',
            'present_ich' => 'mache',
            'present_du' => 'machst',
            'present_er_sie_es' => 'macht',
            'preterite' => 'machte',
            'perfect' => 'gemacht',
        ]);

        Verb::create([
            'infinitive' => 'schreiben',
            'present_ich' => 'schreibe',
            'present_du' => 'schreibst',
            'present_er_sie_es' => 'schreibt',
            'preterite' => 'schrieb',
            'perfect' => 'geschrieben',
        ]);
    }
}
