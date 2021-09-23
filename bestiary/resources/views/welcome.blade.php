@extends('layouts.master')

@section('content')
    <div class="row">
        <h1>{{$title}}</h1>
        <p>{{$paragraph}}</p>
        <ul>
            @foreach($info as $in)
            <li>{{$in['name']}}</li>
                <li>{{$in['type']}}</li>
            @endforeach
        </ul>
    </div>
@endsection
