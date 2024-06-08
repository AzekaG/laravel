@extends('templates.main')

@section('content')
    <div class="reveal">Users</div>
    <a href="{{ route('userCreate') }}" class="btn btn-primary">Create User</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><img src="{{ $user->pathimage }}" alt="avatar" style="max-width: 100px"></td>
                    <td>
                        <a href="{{ route('userInfo', ['user' => $user->id]) }}" class="btn btn-info">Info</a>

                        {!! Form::open(['route' => ['userDelete', $user->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
