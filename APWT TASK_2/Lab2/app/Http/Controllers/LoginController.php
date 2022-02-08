<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginCreate(){
        return view('pages.student.loginCreate');
    }
    public function studentCreatesubmitted(Request $request){
        $validate = $request->validate([
            'id'=>'required',
            'password'=>'password',
            
        ],
        
    );
     
   
}
}