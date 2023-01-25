@extends('layouts.app')

@section('title')
    | {{$post->title}}
@endsection

@section('content')
    <div class="container">
        <h1 class="my-5">{{$post->title}}</h1>
        <p>{{$post->text}}</p>


    </div>
    @endsection
