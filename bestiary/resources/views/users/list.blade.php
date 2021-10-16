@extends('layouts.app')

@section('content')
    @if  (Auth::check())
<div class="post .col-12 .col-md-8">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($createdCreatures as $creature)
            <tr>
                <th> <a href="{{route('creatures.show', ['creature' => $creature->id])}}">{{$creature->name}}</a></th>
                <th>
                    @if($creature->toggle == 1)
                        <form method="POST" action="{{route('creatures.toggle', $creature->id)}}">
                            {{ csrf_field() }}
                            <button
                                type="submit"
                                class="btn btn-sm btn-fill btn-primary">Published</button>
                        </form>
                    @else
                        <form method="POST" action="{{route('creatures.toggle', $creature->id)}}">
                            {{ csrf_field() }}
                            <button
                                type="submit"
                                class="btn btn-sm btn-fill btn-primary">Draft</button>
                        </form>
                    @endif

                </th>
                <th><form class="edit" action="{{route('creatures.edit', ['creature' => $creature->id])}}"><button class="btn btn-sm btn-fill btn-primary offset-2" >edit</button></form></th>
                {{ csrf_field() }}
                <th>
                    <form method="POST" action="{{route('creatures.destroy', ['creature'=> $creature->id])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button
                            type="submit"
                            class="btn btn-sm btn-fill btn-primary">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endif
