<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //так мы обращаемся к БД , и получаем только ассоциативный массив. Методы не будут работать , потмоу что здесь мы не привязаны к классу
        // $books = DB::table('books')->get();
        //так мы поулчаем обьект модели и можем пользтваться методами класса Бук
        //возвращается не просто коллекция , а обьект класса пагинации
        //осталось настроить цифры на странице , передавая етот обьект.
        //latest - дать последние из коллекции
        $books = Book::with('genre')->latest()->paginate(5);



        // $books = Book::all();



        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //делаем плак тобы получился ассоиативный массив - имя - айди. Это нужно для селекта
        $genres = Genre::all()->pluck('name', 'id');

        return view('admin.books.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*   запрос - валидация ([
        сейчас будет проверяться колонка в таблице именно name
            'имя' => 'имя обазятельно|еще проверяем на уникальность'
        ])*/
        $request->validate([
            'name' => 'required|unique:books,name',
            'genre_id' => 'exists:genres,id'

        ]);


        Book::create($request->all());
        return to_route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
