<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function aboutMe(){
        return view('aboutMe');
    }

    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }
}
