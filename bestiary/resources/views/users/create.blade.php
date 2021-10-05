@extends('layouts.app')

@section('content')
        <form>
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="form-group">
            <input type="radio" id="mythology" name="type" value="Mythology">
            <label for="mythology">mythology</label>
            <input type="radio" id="cryptid" name="type" value="Cryptid">
            <label for="cryptid">Cryptid</label>
            <input type="radio" id="alien" name="type" value="Alien">
            <label for="alien">Aliens</label><br>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
@endsection
