@extends('layouts.app')

@section('content')


    @if(Auth::guest())
        <!--only guest can see welcome-->
        <div class="jumbotron text-center">
            <h1>Welcome To Laravel Phonebook!</h1>
            <p>This is a laravel phonebook application from the "Laravel From Scratch" YouTube series by Brad Traversy</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
    @endif

@endsection
