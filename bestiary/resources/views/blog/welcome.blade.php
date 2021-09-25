@extends('layouts.master')

@section('content')
    <div class="featured-articles">
        <ul>
            @foreach($creatures as $creature)
                <li>{{$creature}}</li>
            @endforeach
        </ul>
    </div>
@endsection
