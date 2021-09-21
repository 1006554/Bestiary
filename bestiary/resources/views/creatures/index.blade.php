@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <H1 class="Title">Hello world</H1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1></h1>
            <li>creatures{{$creatures->name}}</li>
        </div>
    </div>
    <div
        @endsection

