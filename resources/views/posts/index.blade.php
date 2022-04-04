@extends('layout.app')

@section('content')
<h1>Posts</h1>
   

    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="card p-3">
                <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
                <p>{!!$post->body!!}</p>
                <small>Written on {{$post->created_at}}</small>
            </div>
            
        @endforeach
            {{$posts->links()}}
    @else
        <p>No Records Found! </p>   
    @endif

@endsection