@extends('layouts.master')

@section('content')
    <div>
        <ul>
            @foreach($info as $in)
                <li>{{$in['name']}}</li>
                <img src="{{$in['img']}}" alt="{{$in['name']}}">
                <li>{{$in['type']}}</li><br>
            @endforeach
        </ul>
    </div>
@endsection
