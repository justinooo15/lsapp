@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h1>CREATE POST</h1>
 
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}        
            </div>    

            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Enter Text'])}}
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