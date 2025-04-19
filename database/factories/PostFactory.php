<?php

namespace Database\Factories;

use App\Models\Category;
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
            'category_id' => Category::get()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
