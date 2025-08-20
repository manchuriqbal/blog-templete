<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $title = $this->faker->unique()->sentence(3);
        return [
            "title"=> $title,
            "slug" => Str::slug($title),
            "content" => $this->faker->paragraph(5, true),
            "image" => "https://picsum.photos/640/480",
            "user_id" => \App\Models\User::inRandomOrder()->first()->id ?? 1,
            "category_id" => \App\Models\Category::inRandomOrder()->first()->id ?? 1,
            "featured" => $this->faker->boolean(20), 
        ];
    }
}
