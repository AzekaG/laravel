<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{

    public function run(): void
    {
        Book::all()->each(function (Book $book) {
            Review::factory()->count(5)->for($book)->create();
        });
    }
}
