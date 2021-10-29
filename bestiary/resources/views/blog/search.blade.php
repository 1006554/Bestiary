@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="col-md-10">
                    <table class="table">
                        @foreach($data as $creature)
                            <div>
                                <a href="{{route('creatures.show', ['creature' => $creature->id])}}" width="50" heigh="50">{{$creature->name}}</a>
                            </div>

                        @endforeach
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
