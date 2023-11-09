<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home');
    }
    public function category()
    {
        return view('Category');
    }
     public function singlepost()
    {
        return view('SinglePost');
    }
     public function elements()
    {
        return view('Elements');
    }
     public function contact()
    {
        return view('Contact');
    }
}
