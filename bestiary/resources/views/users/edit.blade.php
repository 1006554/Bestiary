@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('creatures.update', ['creature' => $creature->id])}}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <div class="col-md-8 form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="{{$creature->name}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3">{{$creature->description}}</textarea>
        </div>

        <div class="form-group">
            <label>Upload Your Image
                <input type="file" name="image" placeholder="{{$creature->image}}" />
            </label>
        </div>

        <div class="form-group">
            <input type="radio" id="mythology" name="tag" value="Mythology">
            <label for="mythology">mythology</label>
            <input type="radio" id="cryptid" name="tag" value="Cryptid">
            <label for="cryptid">Cryptid</label>
            <input type="radio" id="alien" name="tag" value="Alien">
            <label for="alien">Aliens</label><br>
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">

    </form>

@endsection
