<?php

namespace App\Http\Controllers;
use App\Table;
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
        $tables = Table::all();
        return view('pages/booktable',compact('tables'));
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
