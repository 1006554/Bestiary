@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (Auth::check())
                    <form method="POST" action="{{route('creatures.store')}}">

                        {{ csrf_field() }}

                        <h1>Add a new creature</h1>
                        <div class="form-group">

                            <label for="name">Name:</label>

                            <input type="text" id="name" name="name" class="form-control">

                        </div>



                        <div class="form-group">

                            <label for="description">Description</label>

                            <input type="text" id="description" name="description" class="form-control">

                        </div>



                        <div class="form-group">
                            <label>Upload Your Image
                                <input type="file" name="image" />
                            </label>
                        </div>



                        <div class="form-group">
                            <input type="radio" id="mythology" name="tag" value="Mythology">
                            <label for="mythology">mythology</label>
                            <input type="radio" id="cryptid" name="tag" value="Cryptid">
                            <label for="cryptid">Cryptid</label>
                            <input type="radio" id="aliens" name="tag" value="Aliens">
                            <label for="aliens">Aliens</label><br>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                        @else
                        You are not signed in.
                        @endif
                </div>
            </div>
        </div>
@endsection