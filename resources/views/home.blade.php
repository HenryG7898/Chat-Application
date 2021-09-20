<head>
    <style>
        body{
            background-image: url("https://previews.123rf.com/images/tovovan/tovovan2003/tovovan200300003/141866356-chat-wallpaper-social-media-message-vector-background-copy-space-for-a-text.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 10%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #1a202c; color: white">
                    <div class="card-header" style="text-align: center; font-size: 35px"> Welcome To Henry's ChatApp</div>

                    <div class="card-body" s>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1 style="text-align: center">{{ Auth::user()->name }}</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

@endsection
