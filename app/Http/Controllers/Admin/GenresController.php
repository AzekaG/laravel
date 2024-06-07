<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();
        return view('admin.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // по уолчании если есть ошибки в сторе - он обратно автоматически выводит 

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        // // создание нового ресурса:
        // $genre = new Genre();
        // //в параметры автоматом приходит request , а в нем наша форма
        // $genre->name = $request->name;
        // $genre->description = $request->description;
        // //cохраняем данные в БД
        // $genre->save();



        //МАССОВОЕ наполнение данными , мы можем в криэйт передавать все данные в виде ассоциативного массива 

        //одна ета строка уже добавляет нову запись в БД . 
        //но по дефолту массовое наполнение не разрешено , поэтому в модели определяем какие поля мы разрешаем массово заполнять
        //для етого в модели в свойстве fillable начинаем перечислять наши свойста , которые будут подвязываться
        GENRE::create($request->all());
        return to_route('genres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('admin.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $genre->update($request->all());
        return to_route('genres.index');

        //либо 
        // $genre->name = $request->name;
        // $genre->description = $request->description;
        // //cохраняем данные в БД
        // $genre->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        //все просто) 
        $genre->delete();
        return to_route('genres.index');
    }
}
