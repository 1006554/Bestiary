@extends('layouts.master')

@section('content')
    <div class="edit-form">
        <form action{{route('admin.update')}} method="post">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname">
        <button type="submit">Submit</button>
        </form>
    </div>
@endsection
