@extends('templates.main')

@section('content')
    <h1>Create Feedback</h1>
    {{-- название маршрута с адресов маршрутов --}}
    {!! Form::open(['route' => 'clientfeedbackstore']) !!}
     <div class="mt-3">
        {{-- Форма::лэйбл('к чему привязываем' , 'текст котоыр выводится' , ['класс ксс' =>'Форм-лэйбл']) --}}
        {!! Form::label('username', 'User Name:', ['class' => 'form-label']) !!}
        {{-- Форма::текст('к чему привязываем', ' что выводим (value)' , [класс]) --}}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mt-3">   
        {{-- Форма::лэйбл('к чему привязываем' , 'текст котоыр выводится' , ['класс ксс' =>'Форм-лэйбл']) --}}
        {!! Form::label('message', 'Message:', ['class' => 'form-label']) !!}
        {{-- Форма::текст('к чему привязываем', ' что выводим (value)' , [класс]) --}}
        {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Save', ['class' => 'btn btn-primary mt-3']) !!}
    {!! Form::close() !!}
@endsection
