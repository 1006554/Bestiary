@extends('layouts.app')

@section('content')
    <div class="post .col-12 .col-md-8">
        <h1 class="post-title">{{$article->name}}</h1>
        <p>{{$article->description}}</p>
        <img src="{{$article->image}}">
    </div>
@endsection
