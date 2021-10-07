@extends('layouts.app')

@section('content')
    <div class="post .col-12 .col-md-8">
        <h1 class="post-title">{{$creature->name}}</h1>
        <p>{{$creature->description}}</p>
        <img src="{{$creature->image}}">
    </div>
    <nav aria-label="functions">
        <ul class="functions">
            <li class="favorite"><a class="favorite" href="#">Add to favorites</a></li>
            <li class="edit"><a class="editbutton" href="{{route('creatures.edit', ['creature' => $creature->id])}}">edit</a></li>
            <li class="delete"><a class="delete" href="{{route('creatures.destroy', ['creature'=> $creature->id])}}">delete</a></li>
        </ul>
    </nav>
@endsection
