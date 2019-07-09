@extends('layouts.app')

@section('content')

    <div class="jumbotron">


        <div class="container">
            <h1>About Page</h1>
            @if(count($abouts) > 0)
                <ul class="list-group">
                    @foreach ($abouts as $about)
                        <li class="list-group-item">{{$about}}</li>
                    @endforeach                    
                </ul>
            @else
                <h2>No data to retrieve</h2>
            @endif
        </div>



    </div>
    
@endsection