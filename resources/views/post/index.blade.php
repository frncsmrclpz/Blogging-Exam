@extends('layout.lay')

@section('content')
    
    <br><h1>Posts</h1>
    <hr>
    <a href="/posts/create" class="btn btn-info">Create New Post</a>
    <hr>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card padding p-5">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:80%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        <br>{{ $posts->links() }}
    @else
        <p>No Posts Found</p>
    @endif

@endsection