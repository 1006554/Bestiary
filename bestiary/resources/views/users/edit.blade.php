@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('creatures.update', ['creature' => $creature->id])}}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <div class="col-md-8 form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{$creature->name}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description">{{$creature->description}}</textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="Submit">

    </form>

@endsection
