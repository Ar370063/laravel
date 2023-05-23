<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigateController extends Controller
{
    public function Home(){
        return view('home');
    }
    public function Login(){
        return view('login');
    }
    public function Register(){
        return view('register');
    }
}
