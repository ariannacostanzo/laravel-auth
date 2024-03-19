<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->text(30);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->paragraphs(8, true),
            'image' => fake()->imageUrl(200,200, 'project',true),
        ];
    }
}
