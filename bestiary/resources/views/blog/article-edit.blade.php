@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <form method="POST" action="{{route('creatures.update', ['creature' => $creature->id])}}"  enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
            {{csrf_field()}}

            <div class="col-md-8 form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{$creature->name}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class=text" name="description"  cols="30" rows="10">{{$creature->description}}</textarea>
            </div>

            <div class="form-group">
                <label>Upload Your Image
                    <input type="file" name="image">
                    @error('image')
                    <div class="error">Please add an image.</div>
                    @enderror
                </label>
            </div>
            <button type="submit" class="btn btn-primary" name="toggle" value="1">Publish</button>
            <button type="submit" class="btn btn-primary" name="toggle" value="0">Draft</button>
        </form>
    @else
        You are not signed in.
    @endif
@endsection
