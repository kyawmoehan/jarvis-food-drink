<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($var = '')
    {
        return view('pages/home');
    }public function food($var = '')
    {
        return view('pages/food');
    }
    public function drink($var = '')
    {
        return view('pages/drink');
    }
    public function booktable($var = '')
    {
        return view('pages/booktable');
    }
    public function about($var = '')
    {
        return view('pages/about');
    }
    public function contact($var = '')
    {
        return view('pages/contact');
    }
}
