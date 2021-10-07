@extends('layouts.app')

@section('content')
    <ul class="col-md-8">
        @foreach($categoryItems as $categoryItem)
            <li>
                <img src="{{$categoryItem -> image}}" alt="thumbnails" class="img-thumbnail">
                <a href="{{route('creatures.show', ['creature' => $categoryItem->id])}}">{{$categoryItem-> name}}</a>
            </li>
        @endforeach
    </ul>
@include('partials.pagination')
@endsection
