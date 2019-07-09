@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h1>EDIT POST</h1>
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
            
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}        
            </div>    

            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Enter Text'])}}
            </div>

            <div class="form-group">
                    {{Form::file('cover_image', ['accept' => 'image/*'])}}
                </div>

            <div class="form-group">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>

        {!! Form::close() !!}   

    </div>

@endsection