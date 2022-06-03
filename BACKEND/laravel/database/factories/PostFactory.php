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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3,6)),
            'author' => $this->faker->name(),
            'pub_year' => $this->faker->year(),
            'slug' => $this->faker->slug(),
            'category_id' => mt_rand(1,6),
            'user_id' => mt_rand(1,10),
            'body' => $this->faker->paragraph(mt_rand(20,100))
        ];
    }
}
