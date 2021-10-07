@extends('layouts.app')

@section('content')
    @if(Session::has('info'))
    <div class="col-md-8">
        <p class="alert alert-info">{{Session::get('info')}}</p>
    </div>
    @endif
    <div class="featured-articles">

    </div>
@endsection
