<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Bestoffer;
use App\Category;

class PageController extends Controller
{
    public function home($var = '')
    {   
        $bestoffers = Bestoffer::all();
        return view('pages/home',compact('bestoffers'));
    }
    public function food($var = '')
    {
        $category = Category::where('name','Food')->get('id');
        $category_id = $category[0]->id;
        $foods = Menu::where('category_id',$category_id)->get();
      
        return view('pages/food',compact('foods'));
    }
    public function drink($var = '')
    {   
        $category = Category::where('name','Drink')->get('id');
        $category_id = $category[0]->id;
        $drinks = Menu::where('category_id',$category_id)->get();
      
        return view('pages/drink',compact('drinks'));
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
