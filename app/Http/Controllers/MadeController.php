<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\newspost;
use Illuminate\Http\Request;

class MadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('web');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('list');
    }
 public function inbox()
    {
         return view('readmore');
    }

  
    public function store(Request $request)
    {
       
    }

    public function show()
    {
            $mades = made::all();
			return view ('list',  ['mades' => $mades]);
    }


    public function edit($id)
    
	{
	 	  
           $mades = made::find($id);
			return view ('editlist',  ['mades' => $mades]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\made  $made
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,
		['id'=>'required',
		'firstname'=>'required',
		'lastname'=>'required',
		'email'=>'required',
		'password'=>'required'
		]);
		$id = $request->id;
        $mades= made::find($id);
        $mades->firstname=$request->firstname;
        $mades->lastname=$request->lastname;
        $mades->email=$request->email;
        $mades->password=$request->password;
        $mades->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\made  $made
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->validate($request,
		['id'=>'required',
		'firstname'=>'required',
		'lastname'=>'required',
		'email'=>'required',
		'password'=>'required'
		]);
		$id = $request->id;
        $mades= made::find($id);
        $mades->firstname=$request->firstname;
        $mades->lastname=$request->lastname;
        $mades->email=$request->email;
        $mades->password=$request->password;
        $mades->delete();
        return back();
    }
}
