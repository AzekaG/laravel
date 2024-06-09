@extends('templates.main')
{{-- Когда мы отправляем эти данные - они отправляться будут в метод store --}}
@section('content')
    <h1>Create Book</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route' => 'books.store']) !!}

    @include('admin.books._form')

    {!! Form::close() !!}
@endsection
