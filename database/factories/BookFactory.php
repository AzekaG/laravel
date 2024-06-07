<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //rand(2,5) - рандом от 2-х до 5-ти
        return [
            'name' => fake()->sentence(2),
            'description' => fake()->paragraph(rand(2,5)),
             'image' => 'https://picsum.photos/250/350'
            ];
    }
}
