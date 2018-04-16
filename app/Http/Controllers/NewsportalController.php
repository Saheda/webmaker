<?php

namespace App\Http\Controllers;

use App\newsportal;
use Illuminate\Http\Request;

class NewsportalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('newsportal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,
		['breaking'=>'required',
		'title'=>'required',
		]);
       $Newsportal= new newsportal;
	     $Newsportal->user_id=$request->user_id;
        $Newsportal->breaking=$request->breaking;
       $Newsportal->title=$request->title;
		$request->file('image')->move(base_path('public/uploads'),$request->file('image')->getClientOriginalName());
		$Newsportal->image = $request->file('image')->getClientOriginalName();
	    $Newsportal->save();
		return back();
    }

    public function show()
    {
      /** $Newsportal=newsportal::all();
         return view('listview', ['Newsportal'=>$Newsportal]);*/
	   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newsportal  $newsportal
     * @return \Illuminate\Http\Response
     */
    public function edit(newsportal $newsportal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newsportal  $newsportal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsportal $newsportal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newsportal  $newsportal
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsportal $newsportal)
    {
        //
    }
}
