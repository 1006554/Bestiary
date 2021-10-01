@extends('layouts.app')

@section('content')
    <div class="create-post">
        <form action{{route('admin.store')}} method="post">
            <label for="creatureName">name:</label><br>
            <input type="text" id="creatureName" name="creatureName"><br>
            <!---select button for uploading image-->
            <label for="description">description:</label><br>
            <input type="text" id="description" name="description"><br>
            <input type="radio" id="mythology" name="type" value="Mythology">
            <label for="mythology">mythology</label>
            <input type="radio" id="cryptid" name="type" value="Cryptid">
            <label for="cryptid">Cryptid</label>
            <input type="radio" id="alien" name="type" value="Alien">
            <label for="alien">Aliens</label><br>
            <button type="submit">Submit</button>
            {{csrf_field()}}
        </form>
    </div>
@endsection
