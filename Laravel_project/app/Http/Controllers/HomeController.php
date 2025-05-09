<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function index2()
    {
        return view('home');
    }

    public function index()
    {
       return view('index');
    }


    public function contact_us()
    {
        return view('contact-us');
    }
}
