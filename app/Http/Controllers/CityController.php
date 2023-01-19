<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //This is City Controller
   public function index(){
    return view("city");
   }

}
