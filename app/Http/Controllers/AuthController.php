<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register(){
        return view('form');
    }
    public function Welcome(){
        return view('welcom');
    }
}
