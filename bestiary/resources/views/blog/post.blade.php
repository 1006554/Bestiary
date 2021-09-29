@extends('layouts.master')

@section('content')
    <div class="post">
        <h1 class="post-title">{{$name}}</h1>
        <p>{{$description}}</p>
        <img src="{{$image}}">
        <img src="#">
    </div>
@endsection
