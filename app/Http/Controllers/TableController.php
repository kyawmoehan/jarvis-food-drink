<?php

namespace App\Http\Controllers;
use App\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::all();
        return view('layouts.pages.table',compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.pages.table_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
         // validation
         $request->validate([
            "number"=>'required',
            "type"=>'required'
        ]);

         // store data
         $table = new Table;
         $table->number = request('number');
         $table->type = request('type');
      
         $table->save();
 
         // Redirect
         return redirect()->route('table.index')->with('status', 'Successfully Insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         //dd($id);
         $table = Table::find($id);
         return view('layouts.pages.table_edit',compact('table'));
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
         // dd($id);
        // validation
        $request->validate([
        "number"=>'required',
        "type"=>'required'
        ]);
        // store data
        $table = Table::find($id);
        $table->number = request('number');
        $table->type = request('type');
     
        $table->save();

         // Redirect
         return redirect()->route('table.index')->with('status', 'Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //dd($id);
         $table = Table::find($id);
        
         // delete
         $table->delete();
         
         // redirect
         return redirect()->route('table.index')->with('status', 'Successfully Delete');
    }
}
