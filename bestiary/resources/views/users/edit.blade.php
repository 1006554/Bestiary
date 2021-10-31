@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                    <h5 class="user-name"> {{Auth::user()->name}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <form method="POST" action="{{route('users.update', ['user' => Auth::user()->id])}}"  enctype="multipart/form-data">
                                    {{ method_field('PUT') }}
                                    @csrf
                                    {{csrf_field()}}
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label for="name">Username</label>
                                        <input type="text" class="form-control" name="name" value=" {{Auth::user()->name}}">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <input class="btn btn-primary" type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
        @include('partials.error')
    @endif
@endsection
