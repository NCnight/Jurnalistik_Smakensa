<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frond_end/Home');
    }
    public function category()
    {
        return view('frond_end/Category');
    }
     public function singlepost()
    {
        return view('frond_end/SinglePost');
    }
     public function elements()
    {
        return view('frond_end/Elements');
    }
     public function contact()
    {
        return view('frond_end/Contact');
    }
}
