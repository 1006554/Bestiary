@extends('layouts.master')

@section('content')
    <div class="featured-articles">
        @foreach($creatures as $creature)
            <p>{{$creature}}</p>
        @endforeach
    </div>
@endsection
