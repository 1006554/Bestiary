@extends('layouts.app')

@section('content')
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    <div class="post .col-12 .col-md-8">
        <h1 class="post-title">{{$creature->name}}</h1>
        <p>{{$creature->description}}</p>
        <img src="{{asset('storage/' . $creature->image)}}" width="300px">

        @if(Auth::check())
    <nav aria-label="functions">
        <ul class="list-unstyled row col-8 ">
            <form class="edit" action="{{route('creatures.edit', ['creature' => $creature->id])}}">
                <button class="btn btn-sm btn-fill btn-primary offset-2" >edit</button>
             </form>
                <form method="POST" action="{{route('creatures.destroy', ['creature'=> $creature->id])}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button
                        id="disabled delete"
                        type="submit"
                        class="btn btn-sm btn-fill btn-primary offset-2">Delete</button>
                </form>
            </ul>
        <section col-span-8 col-start-3 mt-10>
            @include('partials.create-comment')
    @endif

            @include('partials.comment', ['comments' => $creature->comments, 'creature_id' => $creature->id])
@endsection
