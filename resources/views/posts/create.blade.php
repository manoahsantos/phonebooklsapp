@extends('layouts.app')

@section('content')
    <h1>Add Contact</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Name')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Your Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Number')}}
            {{Form::text('body', '', ['class' => 'form-control', 'placeholder' => '09xx xxx xxxx'])}}
            <!-- 'id' => 'article-ckeditor', -->
        </div>
           <!-- Adds cover image
                <div class="form-group">
                {{Form::file('cover_image')}}
                </div>
            -->
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
