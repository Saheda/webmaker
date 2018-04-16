<?php

namespace App\Http\Controllers;

use App\newspost2;
use Illuminate\Http\Request;

class Newspost2Controller extends Controller
{
   
    public function index()
    {
       return view('news2');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\newspost2  $newspost2
     * @return \Illuminate\Http\Response
     */
    public function show(newspost2 $newspost2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newspost2  $newspost2
     * @return \Illuminate\Http\Response
     */
    public function edit(newspost2 $newspost2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newspost2  $newspost2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newspost2 $newspost2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newspost2  $newspost2
     * @return \Illuminate\Http\Response
     */
    public function destroy(newspost2 $newspost2)
    {
        //
    }
}
