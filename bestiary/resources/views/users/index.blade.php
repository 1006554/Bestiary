@extends('layouts.app')

@section('content')
    @guest(redirect('/'))

    @endguest
        @if (Auth::check())
            <div class="container">
                <div class="row gutters">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="account-settings">
                                    <div class="user-profile">
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
                                                @csrf
                                                {{csrf_field()}}
                                            </div>
                                             <div>

                                                 <a class="btn btn-sm btn-fill btn-primary offset-2" href="{{route('creatures.userId', ['id' => Auth::user()->id])}}">Go to your published articles</a>
                                             </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif

@endsection
