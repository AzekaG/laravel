<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Review;
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
        // $request->validate([
        //     'name' => 'required|unique:books,name',
        //     'genre_id' => 'exists:genres,id'

        // ]);
        $book = Book::create($request->all());
        if ($request->image) {
            //здесь мы сохраняем файл
            $path = $request->image->store("test");
            $book->image = 'storage/' . $path;
            $book->save();
        }

        //здесь должны путь записать в БД
        // dd($path);


        return to_route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {

        $book = Book::with('reviews')->where('id', $book->id)->first();
        return view('admin.books.info', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
    }
    public function destroyreview(Review $review)
    {

        $review->delete();
        $book = Book::with('reviews')->where('id', $review->book_id)->first();
        return view('admin.books.info', compact('book'));
    }

    public function reviewedit(Review $review)
    {
        return view('admin.books.reviewedit', compact('review'));
    }
    public function reviewupdate(Request $request, Review $review)
    {
        $review->update($request->all());

        $review->save();
        $book = Book::with('reviews')->where('id', $review->book_id)->first();

        return view('admin.books.info', compact('book'));
    }


    public function reviewcreate(Book $book)
    {

        return view('admin.books.reviewcreate', compact('book'));
    }

    public function storeReview(Request $request)
    {

        $review = Review::create($request->all());
        $book = Book::with('reviews')->where('id', $review->book_id)->first();
        return view('admin.books.info', compact('book'));
    }
}
