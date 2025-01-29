<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Definition;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Word;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Seeder;

class   DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Definition::factory()->count(10)->create();
        Word::factory()->count(10)->create();
        // User::factory(10)->create();
        Customer::factory()
            ->create([
                'name' => 'Admin',
            ]);
        Customer::factory()
            ->count(10)
            ->create();

        User::factory()->create([
            'name' => 'Test User',
        ]);

        $this->call([
            AntonymSeeder::class,
            SynonymSeeder::class,
        ]);
    }
}
