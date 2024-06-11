<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{

    protected $model = Review::class;

    public function definition()
    {
        return [
            'book_id' => null, // Это будет установлено позже
            'comment' => Str::limit($this->faker->paragraph, 200, '...')
        ];
    }
}
