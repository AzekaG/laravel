@extends('templates.main')
<link rel="stylesheet" href="{{ asset('styleImage.css') }}">
@section('content')
    <div class="reveal">{{ $book->name }}</div>


    
    <a href="{{ route('createReview' , $book->id) }}" class="btn btn-primary">Create review</a>

    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->description }}</td>
                <td><img src="{{ asset($book->image) }}" alt="{{ $book->name }}" data-src-big="{{ asset($book->image) }}"
                        style="max-height: 100px"></td>
            </tr>

        </tbody>
    </table>

    <table class="table table-stripped table-bordered">
        @foreach ($book->reviews as $review)
            <tr>

                <td>{{ $review->comment }}</td>
                <td>{{ $review->created_at }}</td>
                <td>
                    {!! Form::open(['route' => ['delReview', $review->id], 'method' => 'post']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    {!! Form::open(['route' => ['editReview', $review->id], 'method' => 'get']) !!}
                    {!! Form::submit('Edit', ['class' => 'btn btn-warning']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>

    <script src="{{ asset('increase.js') }}"></script>
@endsection
