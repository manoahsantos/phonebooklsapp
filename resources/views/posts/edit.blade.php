@extends('layouts.app')

@section('content')
    <h1>Edit Contact</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Name')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Number')}}
            {{Form::text('body', $post->body, ['class' => 'form-control', 'placeholder' => '09xx xxx xxxx'])}}
            <!-- 'id' => 'article-ckeditor', -->
            <!-- {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}   'id' => 'article-ckeditor',  -->
        </div>
            <!--     <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>
            -->

            <!--SUBMIT BUTTON-->
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection
