<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeController extends Controller
{
    //This is the College Controller Page
    public function index(){
        return view("college");
    }
}
