@extends('layouts.app')

@section('content')
    <div class="post .col-12 .col-md-8">
        <h1 class="post-title">{{$creature->name}}</h1>
        <p>{{$creature->description}}</p>
        <img src="{{asset('storage/creature/'.$creature->image)}}">
    @if (Auth::check())
    <nav aria-label="functions">
        <ul class="list-unstyled row col-8 ">
            <form class="favorite" action="#"><button class="btn btn-sm btn-fill btn-primary offset-2"  >Add to favorites</button></form>
            <form class="edit" action="{{route('creatures.edit', ['creature' => $creature->id])}}"><button class="btn btn-sm btn-fill btn-primary offset-2" >edit</button></form>
                <form method="POST" action="{{route('creatures.destroy', ['creature'=> $creature->id])}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button
                        disabled id="disabled delete"
                        type="submit"
                        class="btn btn-sm btn-fill btn-primary offset-2">Delete</button>
                </form>
            </ul>
               @elseif(Auth::check('admin'))

                <form method="POST" action="{{route('creatures.destroy', ['creature'=> $creature->id])}}">
                {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button
                    type="submit"
                    class="btn btn-sm btn-fill btn-primary">Delete</button>
                </form>

    @else
            <nav aria-label="functions">
                <div>
                    <form class="favorite"><button class="btn btn-sm btn-fill btn-primary" disabled id="disabled fav" >Add to favorites</button></form>
                    <form  class="edit"><button class="btn btn-sm btn-fill btn-primary" disabled id="disabled edit" >edit</button></form>
                    <li>
                        <form>
                            <button
                                disabled id="disabled delete"
                                type="submit"
                                class="btn btn-sm btn-fill btn-primary">Delete</button>
                        </form>
                </div>
            </nav>
    @endif
@endsection
