<?php

namespace Database\Factories;

use App\Models\Snippet;
use Illuminate\Database\Eloquent\Factories\Factory;

class SnippetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(40, 50),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(400, 300, 'cats'),
            'code' => $this->faker->text,
            'category' => $this->faker->randomElement(['Tailwind', 'Bootstrap', 'CSS', 'Sass', 'React']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
