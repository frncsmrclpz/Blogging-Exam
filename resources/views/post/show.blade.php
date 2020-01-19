@extends('layout.lay')

@section('content')
    
    <a href="/posts"><button type="button" class="btn">Go Back</button></a>
    <br><h1>{!!$post->title!!}</h1>
    <img style="width:80%" src="/storage/cover_images/{{$post->cover_image}}"><hr>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on: {{$post->created_at}}</small>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection