@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <a href="admin/create">Create a new post</a>
                <ul>
                    @foreach($creatures as $creature)
                        <li>{{$creature}}</li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection
