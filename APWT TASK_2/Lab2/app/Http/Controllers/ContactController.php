<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactphpCreate(){

        return view('pages.student.contactCreate');

    }

   

    public function contactCreate(){

        return view('pages.student.contactCreate');

    }

    public function studentCreatesubmitted(Request $request){

        $validate = $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'phone' => 'required',

            'message' => 'required'

         ]);

         

}
}
