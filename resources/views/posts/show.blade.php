@extends('layout.app')

@section('content')
    <h1>{{$posts->title}}</h1>
    <div class="container bg-light">
        <h3>{!!$posts->body!!}</h3>
        <hr>
            <div class="d.flex justify-content-around bg-dark text-light">
                <small>Written on {{$posts->created_at}}</small>
            </div>
            <a href="/post/{{$posts->id}}/edit" class="btn btn-primary">Edit</a>

    </div>


@endsection