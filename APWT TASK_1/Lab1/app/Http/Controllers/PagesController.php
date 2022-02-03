<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{
    

        public function index(){

            return view('home');

        }

    public function product(){
        $name = "";
        $id="";
        $dob = "";
        $names=array("");
        return view('product')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);
    }
    
    public function Ourteams(){
        return view('Ourteams');
    }
    public function aboutus(){
        return view('aboutus');
    }

     public function contactus(){
    return view('contactus');
}
}




