<?php

namespace Database\Factories;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $name = $this->faker->unique()->words(2, true);
        return [
            "name"=> $name,
            "slug"=> Str::slug($name),
            "parent_id"=> $this->faker->optional()->randomElement([null, 1, 2]),
            "user_id" => \App\Models\User::first()->id ?? 1,
            "description" => $this->faker->sentence(5, true),
        ];
    }
}
