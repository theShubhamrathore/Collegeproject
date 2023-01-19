<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\User;

class FriendController extends Controller
{
    //This is Friend Controller
    public function friend(){
        $data = User::all();
        return view('friend',['users'=>$data]);
        
    }
}
