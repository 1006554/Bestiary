@extends('layouts.app')

@section('content')
    <div class="create-post">
        <form action{{route('admin.store')}} method="post">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname">
            <button type="submit">Submit</button>
            {{csrf_field()}}
        </form>
    </div>
@endsection
