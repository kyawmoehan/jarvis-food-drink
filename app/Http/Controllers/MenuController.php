<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Category;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return view('layouts.pages.menu',compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        $categories = Category::all();
        return view('layouts.pages.menu_create',compact('menu','categories'));
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $request->validate([
            "name"=>'required|min:4',
            "price"=>'required',
            "image"=>'required|mimes:jpeg,jpg,png',
            "category"=>'required'
        ]);

        //fileupload
        if($request->hasfile('image'))
        {
            $photo = $request->file('image');
            $name = time().'.'. $photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/images/menu/',$name);
            $photo = '/storage/images/menu/'. $name;
        }
        else
        {
            $photo = '';
        }

        //storedata
        $menu = new Menu;
        $menu->name = request('name');
        $menu->price = request('price');
        $menu->image = $photo;
        $menu->category_id = request('category');
        $menu->save();

        //Redirect
        return redirect()->route('menu.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);
        return view('layouts.pages.menu_edit',compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        $categories = Category::all();
        return view('layouts.pages.menu_edit',compact('menu','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //Validation
        $request->validate([
            "name"=>'required|min:4',
            "price"=>'required',
            "image"=>'sometimes|mimes:jpeg,jpg,png',
            "category"=>'required'
        ]);

        //fileupload
        if($request->hasfile('image'))
        {
            $photo = $request->file('image');
            $name = time().'.'. $photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/images/menu/',$name);
            $photo = '/storage/images/menu/'. $name;
        }
        else
        {
            $photo = request('oldimg');
        }

        //update data
        $menu = Menu::find($id);
        $menu->name = request('name');
        $menu->price = request('price');
        $menu->image = $photo;
        $menu->category_id = request('category');
        $menu->save();
 
       //Redirect
        return redirect()->route('menu.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('menu.index');
    }
}
