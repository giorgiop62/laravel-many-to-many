@extends('layouts.app')

@section('title')
    | Nuovo Post
@endsection

@section('content')
    <div class="container">

        <h1 class="my-5">nuovo post </h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" @error('title') is-valid @enderror class="form-control" id="title" name="title"
                    value="{{ old('title') }}" placeholder="Titolo">
                @error('title')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" @error('data') is-valid @enderror class="form-control" id="date" name="data"
                    value="{{ old('date', date('Y-m-d')) }}" placeholder="Data">
                @error('data')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-3">
                <label for="text" class="form-label">Testo</label>
                <textarea class="form-control" @error('text') is-valid @enderror id="text" name="text" cols="30" rows="3">{{ old('text') }}</textarea>
                @error('text')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror

            </div>

            <button type="submit" class="btn btn-success">Invia</button>


        </form>





        </form>
    </div>
@endsection
