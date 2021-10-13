@extends('layouts.app')

@section('content')
    @guest
        @if (Route::has('login'))
            {{redirect('login')}}
        @endif
    @else
        {{ Auth::user()->name }}
    @endguest
@endsection
