{{-- указываем от какого шаблона наследуемся --}}
@extends('templates.main')

@section('content')
    <h1>Genres</h1>
    {{-- При назначчении маршрута можно воспользоваться в консоли  php artisan route:list --except-vendor  , там мы увидим какой маршрут нужен для метода create --}}
    <a href="{{ route('genres.create') }}" class="btn btn-primary">Create genre</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $genre->name }}</td>
                    <td>{{ $genre->description }}</td>
                    <td></td>
{{-- вдруг захотим вывести книги ) 
                    {{ dlhe-- @foreach ($genre->books as $book)
                        <div>{{ $book->name }}</div>
                    @endforeach --}} --}}

                    <td>
                        {{-- route смотрим в консоле по маршруту    . не забываем указывать параметр , что в жанр будет попадать айди редактируемого жанра --}}
                        <a href="{{ route('genres.edit', ['genre' => $genre->id]) }}" class="btn btn-warning">Edit</a>

                        {!! Form::open(['route' => ['genres.destroy', $genre->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
