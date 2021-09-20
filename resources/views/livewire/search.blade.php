
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


</head>
<body>

    <div class="container">
        <div class="search">
            <form action="{{url('addfriend')}}" method="post" style="margin-left: 28%; margin-top: 20px ">
                @method('POST')
                @csrf
                <input class="searchbar" type="text" autofocus name="search" placeholder="Search for a friend"
                style="width: 50%; padding: 6px; border: #1b1e21 solid 2px">
                <input type="submit" value="Search" class="absolute right-0 top-0 rounded-l-none btn btn-primary bg-pink-700 border-black hover:bg-black focus:border-pink-700"
                style="padding: 5px; width: 10%; font-size: 20px">
            </form>
        </div>
        {{--{{dd(session()->all())}}--}}

        <h1 style="margin-left:36%;margin-top:100px ">{{session()->get('message')}}</h1>

        {{--            <div class="framo">--}}
        {{--                <form action="#" method="post">--}}
        {{--                    @csrf--}}
        {{--                    --}}{{--            image--}}
        {{--                    <div class="image" >--}}
        {{--                        <div >--}}
        {{--                            <img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" width="94" height="94" alt="PP">--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    --}}{{--            Information--}}
        {{--                    <div class="info">--}}
        {{--                        <div>--}}
        {{--                            <div>--}}
        {{--                                <div>Full Name: {{ $search->name }}</div>--}}
        {{--                            </div>--}}
        {{--                            <div>--}}
        {{--                                <div>Username: {{ $search->username }}</div>--}}
        {{--                            </div>--}}
        {{--                            <div>--}}
        {{--                                <div>Gender: {{ $search->gender }}</div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="press">--}}
        {{--                        <button type="submit" class="btn btn-primary ">Fellow</button>--}}
        {{--                    </div>--}}
        {{--                </form>--}}
        {{--            </div>--}}

    </div>

</body>

