<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->sentence(),
            'description' => fake()->text(),
            'likes' => rand(1, 10000),
            'dislikes' => rand(1, 10000),
            'is_published' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
