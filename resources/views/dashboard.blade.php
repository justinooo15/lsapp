@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>

                    @if (count($posts) > 0)

                        <h3>Your Blog Posts</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td><img src="/storage/cover_images/{{$post->cover_image}}" alt="Sample Image"></td>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="/posts/{{$post->id}}" class="btn btn-primary">View Details</a>
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <h2>No Posts Yet </h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
