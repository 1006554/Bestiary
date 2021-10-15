@extends('layouts.app')

@section('content')
        @if  (Auth::check())
            <div class="post .col-12 .col-md-8">
                <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($createdCreatures as $creature)
                    <tr>
                            <th>{{$creature->name}}</th>
                            <th>{{$creature->toggle}}</th>
                    </tr>
                    @endforeach
                        <!--
                        <form method="POST" action=""

                        @/foreach()

                            <label for="toggle">{$creature->name}}</label>
                            <label>Status</label>
                            <form method="POST" action="{route('creatures.toggle',$creature->id)}}">
                               // { //method_field('PUT') }
                                //{//csrf_field() }

                                @/if(//$creature->toggle = '1')
                                <input id="flexCheckChecked" type="checkbox" name="toggle" value="{$creature->toggle}}">
                                <button type="submit" class="btn btn-info" name="toggle">{$creature->toggle}}</button>
                                @/else
                                    <input id="flexCheckDefault" type="checkbox" name="toggle" value="{$creature->toggle}}">
                                    <button type="submit" class="btn btn-info" name="toggle">{$creature->toggle}}</button>
                                @/endif

                        @/endforeach </form>-->
                    </tbody>
                </table>
            </div>
    @endif
@endsection
