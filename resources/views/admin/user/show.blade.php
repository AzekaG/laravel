@extends('templates.main')

@section('content')
    <div class="reveal">User</div>
    <a href="{{ route('userIndex') }}" class="btn btn-primary">Вернуться назад</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Password</th>
                <th>Create at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><img src="{{ $user->pathimage }}" alt="avatar" style="max-width: 100px"></td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->created_at }}</td>
              
            </tr>

        </tbody>
    </table>
@endsection
