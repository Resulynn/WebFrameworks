@extends('layouts.app')

    @section('content')
        <div class="container p-3">
            <h1>Create Post</h1>
        </div>

        {!! Form::open(['action'=>['App\Http\Controllers\PostsController@update',$post->id], 
            'method'=>'POST'])!!}
            <div>
                {{Form::label('', 'Title', 'title')}}
                {{Form::text('title',$post->title,['class'=>'form-control',
                    'placeholder'=>'Title'])}}
            </div>
            <div>
                {{Form::label('', 'Body', 'body')}}
                {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control',
                    'placeholder'=>'Body Text'])}}
            </div>

            <div class="container p-3">
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}

    @endsection
