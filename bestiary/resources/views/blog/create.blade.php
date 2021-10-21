@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (Auth::check())
                    <form method="POST" action="{{route('creatures.store')}}">

                        {{ csrf_field() }}

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        <h1>Add a new creature</h1>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control">
                            @error('name')
                            <div class="error">Please enter a name.</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description"  cols="30" rows="10" class="form-control" > </textarea>
                            @error('description')
                            <div class="error">Please fill in a description.</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Upload Your Image
                                <input type="file" name="image" id="image" value="image">
                                @error('image')
                                <div class="error">Please add an image.</div>
                                @enderror
                            </label>
                        </div>

                        <div class="form-group">
                            <input type="radio" id="mythology" name="tags" value="Mythology">
                            <label for="mythology">mythology</label>
                            <input type="radio" id="cryptid" name="tags" value="Cryptid">
                            <label for="cryptid">Cryptid</label>
                            <input type="radio" id="aliens" name="tags" value="Aliens">
                            <label for="aliens">Aliens</label><br>
                            @error('tag')
                            <div class="error">Please select a category.</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary" value="Submit">Add</button>
                    </form>
                        @else
                        You are not signed in.
                        @endif
                </div>
            </div>
        </div>
@endsection
