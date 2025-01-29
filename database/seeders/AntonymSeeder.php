<?php

namespace Database\Seeders;

use App\Models\Antonym;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Word;

class AntonymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $words = [
            ['name' => 'hot'],
            ['name' => 'big'],
            ['name' => 'happy'],
            ['name' => 'fast'],
            ['name' => 'strong'],


        ];
        $words = [
            ['name' => 'hot', 'antonym' => 'cold'],
            ['name' => 'big', 'antonym' => 'small'],
            ['name' => 'happy', 'antonym' => 'sad'],
            ['name' => 'fast', 'antonym' => 'slow'],
            ['name' => 'strong', 'antonym' => 'weak'],
        ];
        foreach ($words as $data) {
            $word = Word::create(['name' =>$data['name']]);
            $word->antonyms()->create(['antonym'=>$data['antonym']]);
        }
    }
}
