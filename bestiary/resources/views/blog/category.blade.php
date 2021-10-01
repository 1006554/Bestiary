@extends('layouts.app')

@section('content')

    <ul>
        @foreach($categoryItems as $categoryItem)
            <li>
                <img src="{{$categoryItem -> image}}" alt="thumbnails" class="img-thumbnail">
                <a href="article/{{$categoryItem -> id}}">{{$categoryItem-> name}}</a>
            </li>
        @endforeach
    </ul>
@endsection
