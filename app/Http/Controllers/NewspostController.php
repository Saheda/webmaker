<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\newspost;
use App\newsportal;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\demo;
class NewspostController extends Controller
{
    
    public function index()
    {
        
	  return view('post');
    
    }
 public function create()
    {
        $Newspost=newspost::all();
        $Newsportal=newsportal::all();
        return view('listview', ['Newsportal'=>$Newsportal, 'Newspost'=>$Newspost]);
	
    }
	
 Public function read()
 {
	 $Newspost=newspost::all();
	 $Newsportal=newsportal::all();
	 return view('readmore', ['Newsportal'=>$Newsportal,'Newspost'=>$Newspost ]);
 }
 
    public function store(Request $request)
    {
		
        $this->validate($request,
		['title'=>'required',
		'category'=>'required',
		'description'=>'required',
		'reporter'=>'required',
		
		]);
		 
       $Newspost= new newspost;
        $Newspost->title=$request->title;
        $Newspost->user_id=$request->user_id;
        $Newspost->category=$request->category;
        $Newspost->description=$request->description;
		$Newspost->reporter=$request->reporter;
		$Newspost->date = date('Y-m-d');
        //Storage::disk('public')->put($request->file('avatar')->getClientOriginalName(), $request->file('avatar'));
		$request->file('avatar')->move(base_path('public/uploads'),$request->file('avatar')->getClientOriginalName());
		$Newspost->avatar = $request->file('avatar')->getClientOriginalName();
       
	           $Newspost->save();
		
		return back();
    }

    public function show()
    {
        $Newspost=newspost::all();
		$Newsportal=newsportal::all();
		return view('news',  ['Newsportal'=>$Newsportal,'Newspost'=>$Newspost]);
	
	}
	public function search(Request $request){                          

	Log::info($request->input('search'));
	$searh_key = $request->input('search');
//return newspost::all();

    $search_result = newspost::where('title', 'LIKE',  '%' . $searh_key . '%')->get();
			  
			 			  
			  
		
	}
    public function shown()
	
	{
				 
        $Newspost=newspost::all();
	         return view('search', ['Newspost'=>$Newspost]);
	}
    
    public function edit($id)
    {
		 
        $Newspost=newspost::find($id);
		return view ('newslist', ['Newspost'=>$Newspost]);
    }


    public function update(Request $request)
    {  
		$this->validate($request,
		['id'=>'required',
		'title'=>'required',
		'category'=>'required',
		'description'=>'required',
		'reporter'=>'required',
		]);
	
		$id = $request->id;
		$Newspost=newspost::find($id);
	    $Newspost->title=$request->title;
        $Newspost->category=$request->category;
        $Newspost->description=$request->description;
		$Newspost->reporter=$request->reporter;
        $Newspost->date = date('Y-m-d');
		if($request->file('avatar')){
			unlink('uploads/'.$Newspost->avatar);
			$request->file('avatar')->move(base_path('public/uploads'),$request->file('avatar')->getClientOriginalName());
			$Newspost->avatar = $request->file('avatar')->getClientOriginalName();
		}        
        $Newspost->save();
	  
		return back();
		//$Newspost=newspost::find($id);
		
		
    }

    public function destroy($id)
    {
          $Newspost=newspost::find($id);
	
    if ($Newspost != null) {
        $Newspost->delete();
        return redirect('news');
    }

	
		 
    }
	
	
	  public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = 'ReceiverUserName';
 
        Mail::to("receiver@example.com")->send(new DemoEmail($objDemo));
    }
	
	
	
	
	
	
	
	
	
}
