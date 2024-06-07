 <div class="mt-3">
     {{-- так мы заполняем форму ('к чему привязываем' , 'что будет выводиться' , 'аттрибуты ( классa и другие) ' ) --}}
     {!! Form::label('name', 'GenreName: ', ['class' => 'form-label']) !!}
     {{-- ('имя елемента формы' , что будет в поле по умолчании выводиться - null , класс ) --}}
     {!! Form::text('name', null, ['class' => 'form-control']) !!}

 </div>

 <div class="mt-3">
     {!! Form::label('description', 'Genre Description: ', ['class' => 'form-label']) !!}
     {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
 </div>

 {!! Form::submit('Save', ['class' => 'btn btn-primary mt-3']) !!}
