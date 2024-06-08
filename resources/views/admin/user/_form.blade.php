 <div class="mt-3">
     {!! Form::label('name', 'User Name:', ['class' => 'form-label']) !!}
     {!! Form::text('name', null, ['class' => 'form-control']) !!}

 </div>
 <div class="mt-3">
     {!! Form::label('email', 'Email:', ['class' => 'form-label']) !!}
     {!! Form::text('email', null, ['class' => 'form-control']) !!}
 </div>
 <div class="mt-3">
     {!! Form::label('password', 'Password:', ['class' => 'form-label']) !!}
     {!! Form::text('password', null, ['class' => 'form-control']) !!}
 </div>
 <div class="mt-3">
     {!! Form::label('pathimage', 'Path to avatar:', ['class' => 'form-label']) !!}
     {!! Form::text('pathimage', null, [
         'class' => 'form-control',
         'placeholder' => 'paste url to avatar as http://path',
     ]) !!}
 </div>
 {!! Form::submit('Save', ['class' => 'btn btn-primary mt-3']) !!}
