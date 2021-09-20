<style>
    .searchbar{
        width: 50%;

        padding: 10px;
        margin: auto;

    }
    .search{
        margin-left: 35%;
        margin-top: 10px;
    }

    .framo{
        margin: auto;
        margin-top: 50px;
        border: 2px solid black;
        height: 23vh;
        width: 50vh;
        border-radius: 10px;
        padding: 10px;
        overflow: hidden;
        /*column-*/
        /*display: grid;*/
        /*            align-items: center;*/
        /*            padding: 1rem;*/
    }

    .image {
        padding: 10px;
    }
    .info{
        margin-top: -29%;
        margin-left: 40%;
        font-size: 20px;
        padding: 5px;
        position: center;
    }
    .press{
        margin-top: 2%;
        margin-left: 175px;
    }
</style>
@extends('layouts.app')
@section('content')
    <div class="w-90 md:w-12/12 mx-1">
        <div class="bg-black p-2 shadow-sm rounded-sm">
            <a href="{{url('search')}}" style="text-decoration: none; font-size: 20px"> <button style="width: 30%;margin-left: 35%"
                                                                                              class="block w-full bg-white text-red-700 hover:text-black text-sm transition-all font-semibold rounded-lg hover:bg-blue-900  focus:outline-none focus:shadow-outline focus:bg-white hover:shadow-xs p-2 my-4">
                    Back</button></a>
        </div>
    </div>
{{--    @foreach($search as $search)--}}
        {{--        @if($search->username === session()->get('username'))--}}
        <div class="framo">
            <form action="{{url('addFriends')}}" method="post">
                @csrf
                {{--                                    image--}}
                <div class="jusy">
                    <div class="image" >
                        <div >
                            <img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" width="94" height="94" alt="PP">
                        </div>
                    </div>
                    {{--                                    Information--}}
                    <div class="info">
                        <div>
                            <div>
{{--                                <div>Full Name: {{ auth::user()->name }}</div>--}}
                            </div>
                            <div>
{{--                                <div>Username: {{ $search->username }}</div>--}}
                            </div>
                            <div>
{{--                                <div>Gender: {{ $search->gender }}</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="press">
{{--                    <input class="hidden" hidden type="text" name="user2" value="{{$search->username}}">--}}
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
        {{--    @endif--}}
{{--    @endforeach--}}

@endsection

