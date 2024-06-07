@extends('templates.main')

@section('content')
    <h1>Contact us</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        
        <div class="alert alert-success">{{ session('success') }}</div>
        
    @endif


    <form action="{{ route('contacts.send') }}" method="post">
        @csrf
        <div class="mt-3">
            <label for="" class="form-label">Name :</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mt-3">
            <label for="" class="form-label">Email :</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
        </div>
        <div class="mt-3">
            <label for="" class="form-label">message :</label>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary mt-3">Send</button>
    </form>
@endsection
