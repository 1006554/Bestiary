@extends('layouts.app')

@section('content')
    <div class="post">
        <h1 class="post-title">{{$article->name}}</h1>
        <p>{{$article->description}}</p>
        <img src="{{$article->image}}">
        <img src="#">
    </div>
@endsection
