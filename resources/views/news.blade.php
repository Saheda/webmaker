@extends('inbox')


@section('header')
@endsection




@section('content')


@section('assets')
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
@endsection



<div class="row">

  
	    <div class=" col-12 col-md-8">
		      <h2 class="styy">News search by Date</h2>

		</div>
         
  <div class=" col-6 col-md-4">
  


  <h2 class="styy ">
       	 	<button type="button" class="btn btn-secondary btn-sm">Post News</button></h2>
        </div>

  <div class=" col-md-12 col-xs-12 col-sm-12 ">
          <h1 class="sty">News List</h1>
<div id="main">

  <div class="one">Index</div>
  <div class="one">Title</div>
  <div class="one">Category</div>  
  <div class="one"> Description</div>
    <div class="one">Reporter</div>
  <div class="one">Date</div>
    <div class="one">Image</div>  
  <div class="one">Action</div>
  </div>
  
  
  @foreach($Newspost as $newspost)
  @if ($newspost->user_id ==  Auth::user()->id)
	  <div id="main">



  <div class="two">{{$newspost->id}}</div>
  <div class="two">{{$newspost->title}}</div>
  <div class="two">{{$newspost->category}}</div>  
  <div class="two">{{$newspost->description}}</div>
    <div class="two">{{$newspost->reporter}}</div>
  <div class="two">{{$newspost->date}}</div>
    <div class="two"> <img class="big" src='/uploads/{{$newspost->avatar}}' style="width:60px;"></div> 
    <div class="two">
	<div id="main">
	
	<div class="three">
	
	<a class="btn btn-secondary btn-sm" href="{{url('newslist')}}/{{$newspost->id}}">Update </a></div>
	<div class="three">

<a class="btn btn-secondary btn-sm" href="{{url('news')}}/{{$newspost->id}}"> Delete </a>

	</div>
	</div>
	
	
	
	</div>  	
  
  
  
 
  
       </div>  
  
  @endif
  
   @endforeach

  </div>


  
  <div id="main">

  <div class="one">Index</div>
  <div class="one">Breaking News</div>
  <div class="one">Title</div> 
<div class="one">Image</div>  
  </div>
   @foreach($Newsportal as $newsportal)
  @if ($newsportal->user_id ==  Auth::user()->id)
	  <div id="main">



  <div class="two">{{$newsportal->id}}</div>
   <div class="two">{{$newspost->breaking}}</div>
  <div class="two">{{$newspost->title}}</div>

    <div class="two"> <img class="big" src='/uploads/{{$newsportal->image}}' style="width:60px;"></div> 
  
  
  
  
  
  </div>




  @endif
  
   @endforeach
</div>









@endsection

@section('extrafooter')

@endsection











