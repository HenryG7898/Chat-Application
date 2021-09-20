<?php

namespace App\Http\Controllers;
use App\Models\friends;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Friend extends Controller
{
    public function search(Request $request){

        $name = $request->get("search");
        $search = User::where('name','like','%'.$name.'%')->get();
        return view('addfriend')->with('search',$search);
    }
    public function addFriends(Request $request){

        $add = new friends();
        $add->unique_id = uniqid("",true);
        $add->user1 = Auth::user()->username;
        $add->user2 = $request->input('user2');
        $add->save();

        return redirect('search')->with(['message' => 'Friend Added Successfully']);
    }
}
