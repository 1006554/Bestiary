@extends('layouts.app')

@section('content')
    <div class="post .col-12 .col-md-8">
        <h1 class="post-title">{{$creature->name}}</h1>
        <p>{{$creature->description}}</p>
        <img src="{{$creature->image}}">
    </div>
    <nav aria-label="functions">
        <ul class="functions">
            <li class="favorite"><a class="favorite" href="#">Add to favorites</a></li>
            <li class="edit"><a class="editbutton" href="{{route('creatures.edit', ['creature' => $creature->id])}}">edit</a></li>
            <li>
                <form method="POST" action="{{route('creatures.destroy', ['creature'=> $creature->id])}}">
                {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                <button
                    type="submit"
                    class="btn btn-sm btn-fill btn-primary">Delete</button>
                </form>
            </li>
        </ul>
    </nav>
@endsection
