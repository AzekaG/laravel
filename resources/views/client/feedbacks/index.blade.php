@extends('templates.main')

@section('content')
    <h1>Feedbacks</h1>
    <a href="{{ route('clientfeedbackscreate') }}" class="btn btn-primary">Create Feedback</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Feedback</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedbacks->reverse() as $fb)
                <tr>
                    <td>{{ $loop->count - $loop->iteration + 1 }}</td>
                    <td>{{ $fb->username }}</td>
                    <td>{{ $fb->message }}</td>
                    <td>{{ $fb->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
