<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index(){
        return view('front_home');
    }
    public function about(){
        return view('front_about');
    }
    public function service(){
        return view('front_service');
    }
    public function package(){
        return view('front_package');
    }
    public function destination(){
        return view('front_destination');
    }
    public function guide(){
        return view('front_guide');
    }
}
