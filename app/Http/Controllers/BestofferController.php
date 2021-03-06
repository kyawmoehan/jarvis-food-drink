<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bestoffer;
use App\Category;

class BestofferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offer = Bestoffer::all();
        return view('layouts.pages.offer',compact('offer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offer = Bestoffer::all();
        $categories = Category::all();

        return view('layouts.pages.offer_create',compact('offer','categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validation

        $request->validate([
        "title"=> 'required',
        "variety"=>'required',
        "image"=>'mimes:jpeg,jpg,png',
        "category"=>'required'
        ]);

        //Fileupload
        if($request->hasfile('image')){
            $photo = $request->file('image');
            $name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/image/',$name);
            $photo = '/storage/image/'.$name;

         }else{
            $photo='';
         }
         //dd($photo);

        //Store Data
          $offer = new Bestoffer;
          $offer->title = request('title');
          $offer->variety = request('variety');
          $offer->image = $photo;
          $offer->category_id = request('category');
          $offer->save();

        //Redirect
          return redirect()->route('bestoffer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $offer = Bestoffer::find($id);
       return view('layouts.pages.offer',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Bestoffer::find($id);
        $categories = Category::all();
        return view('layouts.pages.offer_edit',compact('offer','categories'));
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
            "title"=>'required',
            "variety"=>'required',
            "image"=>'mimes:jpeg,jpg,png',
            "category"=>'required'
        ]);

        //update data
        $offer = Bestoffer::find($id);
        $offer->title = request('title');
        $offer->variety = request('variety');
        $offer->category_id = request('category');
        $offer->save();
 
       //Redirect
        return redirect()->route('bestoffer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Bestoffer::find($id);
        $offer->delete();
        return redirect()->route('bestoffer.index');
    }
}
