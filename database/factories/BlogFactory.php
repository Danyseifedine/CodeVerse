<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imagePath = '/blog_img'; // Define the path where images should be saved
        $imageUrl = $this->faker->image(public_path($imagePath), 400, 300, 'cats', false);

        return [
            'user_id' => 6, // Set the user_id to a specific user, e.g., 6
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => $imageUrl, // Use the generated image URL
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
