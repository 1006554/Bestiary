@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <ul class="list-unstyled row">
                @foreach($creatures as $creature)
                    <li class="p-5 m-5">
                        <h3><a href="{{route('creatures.show', ['creature' => $creature->id])}}">{{$creature-> name}}</a></h3>
                        <img src="<img src={{asset('storage/'.$creature->image)}}" alt="thumbnails" class="img-thumbnail">
                    </li>
                @endforeach
                </ul>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        {{ __('You are logged in!') }}
                    @endif
                        @guest
                            @if (Route::has('login'))

                            @endif

                            @if (Route::has('register'))

                            @endif
                        @else
                            {{Auth::user()->name}}
                            <div class="card-body">
                                <a href="{{route('creatures.create')}}">Create new article</a>
                            </div>
                        @endguest
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
