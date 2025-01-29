<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Word;

class SynonymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $words = [
            ['name' => 'big', 'synonyms' => ['large', 'huge']],
            ['name' => 'happy', 'synonyms' => ['joyful', 'cheerful']],
            ['name' => 'big', 'synonyms' => ['quick', 'swift']],
        ];
        foreach ($words as $data) {
            $word = Word::create(['name' =>$data['name']]);
            foreach ($data['synonyms'] as $synonym){
                $word->synonyms()->create(['synonym' =>$synonym]);
            }
        }
    }
}
