@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="row">
            <a href="/posts" class="btn btn-primary">Go back</a>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img src="/storage/cover_images/{{$post->cover_image}}" alt="Post Image">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h1>{{$post->title}}</h1>
                    <p>{!!$post->body!!}</p>
                    <hr>
                    <small>Written on {{$post->created_at}}</small>
                    <hr>
                                
                    @if(!Auth::guest())
                        @if(Auth::user()->id == $post->user['id'])
                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE']) !!}
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                            {!!Form::submit('Delete', ['class' => 'btn btn-danger pull-right'])!!}
                            {!!Form::close()!!}
                        @endif
                    @endif
                </div>
                
            </div>
        </div>
    </div>

@endsection