<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome(Request $request)
    {
        $data=[];
        if($request->isMethod('get')) {
             $data['nama'] = $request->input('fname').' '.$request->input('lname');
        }
        return view("welcome",$data);
    }

    public function register()
    {
        return view("register");
    }

}
