<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        \App\Models\User::factory()->create([
            'name' => 'Arianna',
            'email' => 'arianna@test.it',
            // 'password' => 'arianna3'
        ]);
        
        \App\Models\Project::factory(15)->create();
    }
}
