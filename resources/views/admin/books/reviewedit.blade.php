@extends('templates.main')
<link rel="stylesheet" href="{{ asset('styleImage.css') }}">
@section('content')
    <div class="reveal">qq</div>
    {!! Form::model($review, ['route' => ['updateReview', $review->id], 'method' => 'put']) !!}       
   
    <div class="mt-3">
    
        {!! Form::label('comment', 'Message:', ['class' => 'form-label']) !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
    </div>

        {!! Form::submit('Save', ['class' => 'btn btn-primary mt-3']) !!}
        {!! Form::close() !!}
    @endsection
