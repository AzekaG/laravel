<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Review;
use App\Models\User;
use Database\Factories\ReviewFactory;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



        // \App\Models\User::factory(10)->create();
        //обращается к фабрике user, то есть у нас должна быть своя фабрика , если мы хотим сами создавать в бд какие-то данные по дефолту
        //10 - сколько пользователей мы хотим создать
        // \App\Models\User::factory(10)->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        //создай 5 жанров в  котором будет по 5 книг. Но для создание нам еще нуно связать модели!

        // Genre::factory(5)->has(Book::factory()->count(5))->create();

        $books = Book::all();

        foreach ($books as $book) {
            ReviewFactory::factory(5)->create(['book_id' => $book->id]);
        }
    }
}
