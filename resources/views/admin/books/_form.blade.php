 <div class="mt-3">
     {{-- так мы заполняем форму ('к чему привязываем' , 'что будет выводиться' , 'аттрибуты ( классa и другие) ' ) --}}
     {!! Form::label('name', 'Book Name: ', ['class' => 'form-label']) !!}
     {{-- ('имя елемента формы' , что будет в поле по умолчании выводиться - null , класс ) --}}
     {!! Form::text('name', null, ['class' => 'form-control']) !!}

 </div>
 <div class="mt-3">
     {!! Form::label('description', 'Book Description: ', ['class' => 'form-label']) !!}
     {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
 </div>
 <div class="mt-3">
     {!! Form::label('genre_id', 'Book Genre: ', ['class' => 'form-label']) !!}
     {!! Form::select('genre_id', $genres, null, ['class' => 'form-control']) !!}
 </div>
 <div class="mt-3">
     {!! Form::label('image', 'Book Genre: ', ['class' => 'form-label']) !!}
     {!! Form::file('image',  ['class' => 'form-control']) !!}
 </div>
 {!! Form::submit('Save', ['class' => 'btn btn-primary mt-3']) !!}
