@extends('layouts.app')

@section('content')
    <div class="edit-form">
        <form action{{route('admin.update')}} method="post">
            <label for="fname">First name:</label><br>
            <input
                type="text"
                id="fname"
                name="fname"
                value="{{$post['title']}}"><br>
            <label for="lname">Last name:</label><br>
            <input
                type="text"
                id="lname"
                name="lname"
                value="{{$post['content']}}">
        <button type="submit">Submit</button>
            {{csrf_field()}}
        </form>
    </div>
@endsection
