@extends('layout.app')

    @section('content')
        <div class = "container p-3">
            <h1>Create Posts</h1>
        </div>

        {!! Form::open(['action'=>'App\Http\Controllers\PostsController@store','method'=>'POST']) !!}
            <div>
                {{ Form::label('','Title','title')}}
                {{Form::text('Title','',['class'=>'form-control',
                'placeholder'=>'Title'
                ])}}
            </div>
            <div>
                {{ Form::label('','Body','body')}}
                {{Form::textarea('Body','',['id'=>'article-ckeditor','class'=>'form-control',
                'placeholder'=>'Body Text'
                ])}}
            </div>
            <div>
                {{Form::submit('Submit',['class'=>'btn btn-primary mt-3'])}}
            </div>
        {!! Form::close() !!}
        
    @endsection