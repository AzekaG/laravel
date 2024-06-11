@extends('templates.main')
<link rel="stylesheet" href="{{ asset('styleImage.css') }}">
@section('content')
    <div class="reveal">create review</div>
    {!! Form::model($book, ['route' => ['storeReview', $book->id], 'method' => 'post']) !!}

    <div class="mt-3">

        {!! Form::label('comment', 'Message:', ['class' => 'form-label']) !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::hidden('book_id', $book->id) !!}
    {!! Form::submit('Save', ['class' => 'btn btn-primary mt-3']) !!}
    {!! Form::close() !!}
@endsection
