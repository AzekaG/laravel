@extends('templates.main')

@section('content')
    <h1>Edit Feedback</h1>
    {{-- ['route' => ['маршрут', параметр маршрута] --}}
    {{-- основное чтобы у елементво формы были такие же названия как и свойства модели , он по етим названиям выбирает данные. Но ето дополнениек ларавеля(на паре говорили какое) --}}
    {{-- вместо метода open ставим model , подвязываем нашу модель $feedback и там где null автоматически будут подвязаны наши поля из формы --}}
    {!! Form::model($feedback, ['route' => ['adminfeedbacksupdate', $feedback->id], 'method' => 'put']) !!}

    @include('admin.feedbacks._form')

    {!! Form::close() !!}
@endsection
