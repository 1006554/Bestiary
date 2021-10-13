@extends('layouts.app')

@section('content')
    <ul class="col-md-8">
        @foreach($categoryItems as $categoryItem)
            <li>
                <img src="<img src="{{asset('storage/public/'.$categoryItem->image)}}">" alt="thumbnails" class="img-thumbnail">
                <a href="{{route('creatures.show', ['creature' => $categoryItem->id])}}">{{$categoryItem-> name}}</a>
            </li>
        @endforeach

            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-sm ">
                    <li class="page-item">
                        <a class="page-link" href="{{$categoryItems->links()}}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                </ul>
            </nav>
@endsection
