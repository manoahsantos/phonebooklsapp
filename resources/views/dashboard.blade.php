@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Contacts List</h3></div>



                    <div class="panel-body">

                        <a href="/posts/create" class="btn btn-primary">Add Contact</a>

<!--Search onkeyup="showSuggestion(this.value)
                            <div class="pull-right">Search Contact: <input type="text">
                                <strong><br>Results: </strong>
                                <span id="output"></span>
                                 data (){return {searchQuery:''}}
                            </div>
-->




                                <div><br></div>


                    <!-- <h3>Your Contacts</h3> --> <!--  -->
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Number</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>   <!-- Name -->
                                    <td>{{$post->body}}</td>    <!-- Number -->
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p><br>You have no contacts yet</p>
                    @endif
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
