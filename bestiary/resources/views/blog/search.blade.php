@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="col-md-10">
                    <table class="table">
                        @foreach($data as $creature)
                            <div>
                                <a href="{{route('creatures.show', ['creature' => $creature->id])}}">{{$creature->name}}</a>
                                <img src="{{$creature->image}}">
                            </div>

                        @endforeach
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>

    @include('partials.pagination')
@endsection
