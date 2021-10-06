@extends('layouts.app')

@section('content')
    <div class="post .col-12 .col-md-8">
        <h1 class="post-title">{{$article->name}}</h1>
        <p>{{$article->description}}</p>
        <img src="{{$article->image}}">
    </div>
    <nav aria-label="functions">
        <ul class="functions">
            <li class="favorite"><a class="favorite" href="#">Add to favorites</a></li>
            <li class="edit"><a class="editbutton" href="{{$article->id}}/edit">edit</a></li>
            <li class="delete"><a class="delete" href="#">delete</a></li>
        </ul>
    </nav>
@endsection
