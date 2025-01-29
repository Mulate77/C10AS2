<?php

namespace Database\Factories;

use App\Models\Definition;
use App\Models\Word;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Definition>
 */
class DefinitionFactory extends Factory
{
    protected $model = Definition::class;

    public function definition(): array
    {
        $definitionText = fake()->sentence();
        return [
            'word_id'=>1,
            'definition'=>$definitionText,
            'definition' =>fake()->sentence(),
            'slug'=>Str::slug($definitionText),
            'word_id'=>Word::factory(),
        ];
    }
}
