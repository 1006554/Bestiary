@extends('layouts.master')

@section('content')

    <ul>
        @foreach($mythologyCrits as $mythologyCrit)
            <a href="The link with the id idk how to do this yet tho">{{$mythologyCrit}}</a>
        @endforeach
    </ul>
@endsection
