@extends('layouts.app')

@section('content')

    <ul>
        @foreach($names as $name)
            <li>
                <a href="#">{{$name}}</a>
            </li>
        @endforeach
    </ul>
@endsection
