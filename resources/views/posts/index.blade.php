@extends('layouts.app')

@section('content')
    <h1>Posts</h1>



                @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th><a href="/posts/{{$post->id}}" text-decoration:none>Name</a></th>
                                <th>Number</th>
                                <th></th>
                                <th></th>
                            </tr>

                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>   <!-- Name -->
                                <td>{{$post->body}}</td>    <!-- Number -->
                            </tr>
                            @endforeach
                        </table>
                @else
                        <p><br>You have no contacts yet</p>
                @endif

                                    <!-- Blog Posts List
                                            <div class="well">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                                                    </div>

                                                    <div class="col-md-8 col-sm-8">
                                                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                                    </div>
                                                </div>
                                            </div>
                                    -->


        {{$posts->links()}}

@endsection
