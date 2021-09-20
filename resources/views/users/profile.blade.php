<style>
    body{
        background-image: url("https://static.vecteezy.com/system/resources/previews/002/157/220/original/modern-social-media-concept-with-laptop-and-chat-application-isometric-illustration-isolated-on-white-background-vector.jpg");
        background-repeat: space;
        background-size: cover;
        background-position: center;
    }
</style>
@extends('layouts.app')
@section('content')
    <body>
    <div>
        @livewire('profile')
    </div>
    </body>
@endsection
