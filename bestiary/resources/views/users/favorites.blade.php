@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <p>Array of the posts you faved.</p>
    @else
        You are not signed in.
    @endif
@endsection
