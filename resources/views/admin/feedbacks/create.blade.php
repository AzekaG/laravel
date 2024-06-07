@extends('templates.main')

@section('content')
    <h1>Create Feedback</h1>
    {{-- название маршрута с адресов маршрутов --}}
    {!! Form::open(['route' => 'adminfeedbackstore']) !!}
    @include('admin.feedbacks._form')
    {!! Form::close() !!}
@endsection
