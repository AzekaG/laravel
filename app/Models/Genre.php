<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

//добавляем метод , и т.к. у него много 
    function books()
    {
        return $this->hasMany(Book::class);
    }
}
