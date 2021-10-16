@extends('layouts.app')

@section('content')
        @if  (Auth::check())
            <div class="container">
                <div class="row gutters">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="account-settings">
                                    <div class="user-profile">
                                        <div class="user-avatar">
                                            <img src="{{Auth::user()->image}}" >
                                        </div>
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
                                            <div>
                                                <form class="edit" action="{{route('users.edit', ['user' => Auth::user()->id])}}"><button class="btn btn-sm btn-fill btn-primary offset-2" >edit Profile</button></form>
                                            </div>
                                             <div>
                                                <form class="list" action="#"><button class="btn btn-sm btn-fill btn-primary offset-2" >Go to your published articles</button></form>
                                             </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    @endif
@endsection
