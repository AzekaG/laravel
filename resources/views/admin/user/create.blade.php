@extends('templates.main')

@section('content')
    <div class="reveal">Create User</div>
    {{-- название маршрута с адресов маршрутов --}}
    {!! Form::open(['route' => 'userStore']) !!}
    @include('admin.user._form')
    {!! Form::close() !!}
@endsection
