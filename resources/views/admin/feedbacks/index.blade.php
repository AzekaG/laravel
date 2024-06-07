@extends('templates.main')

@section('content')
    <h1>Feedbacks</h1>
    <a href="{{ route('adminfeedbackscreate') }}" class="btn btn-primary">Create Feedback</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Feedback</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedbacks as $fb)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $fb->username }}</td>
                    <td>{{ $fb->message }}</td>
                    <td>
                        {{-- газначаем маршрут для изменения --}}
                        <a href="{{ route('adminfeedbacksedit', ['feedback' => $fb->id]) }}" class="btn btn-warning">Edit</a>

                        {!! Form::open(['route' => ['adminfeedbackremove', $fb->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
