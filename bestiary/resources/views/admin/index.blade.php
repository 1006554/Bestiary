@extends('layouts.master')

@section('content')
    @if(Session::has('info'))
    <div>
        <p class="alert alert-info">{{Session::get('info')}}</p>
    </div>
    @endif
    <div class="featured-articles">

    </div>
@endsection
