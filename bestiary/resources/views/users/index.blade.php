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
                        <!--
                        <form method="POST" action="/$creature->nam}">-->
                        @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->name }}</td>
                            <td>

                            <input data-id="{{$article->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $article->status ? 'checked' : '' }}>
                            </td>
                            <td>
                                <a href="#" >edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    @endif
@endsection
