<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'genre_id'];

    //нужно бдет добавить метод свзи между моделями

    //связь - 1 ко многим (1 книга - много категорий) 
    //у одной книги один жанр , пожтому здесь используем единственное число
    function genre()
    {
        //етот метод указывает на тип связи   $this->belongsTo(с какой модель связываем);
        return $this->belongsTo(Genre::class);
    }

    //функция называется точно так же как и свойство в модели , и поэтому при получении етого свойства описание будет обрабатыватсья здесь
    // protected function description() : Attribute {
    //     return Attribute::make(
    //         get: fn (string $value) => substr($value, 0, 10),
    //     );
    // }

    //можно и по другому делать  .ето похоже на сеттер

    protected function shortDescription(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => substr($attributes['description'], 0, 30),
        );
    }

    //все методы , котоыре названы как свойства будут их автоматически перезапсиывать. 
    //здесь когда мы ставим картинку , то если в модель будет приходить null - будет віводиться альтернативное изображение
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value) => $value ? $value : 'https://i.pinimg.com/originals/eb/65/14/eb6514742feb1f01de74e1f00eaf8c96.jpg'
        );
    }
}
