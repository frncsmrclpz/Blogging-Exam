@extends('layout.lay')

@section('content')
    <br>
    <h1>Edit Post</h1>
    
    
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body')}}
            {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control is-danger', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            <div class="form-group">
                {{ Form::file('cover_image') }}
            </div>
        </div>
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection