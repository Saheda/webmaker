



@extends('inbox')








@section('header')
@endsection

@section('content')





@section('assets')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

	<br/>
<style>
	#mainn {
    display: -webkit-flex; /* Safari */
    -webkit-flex-direction: row-reverse; /* Safari 6.1+ */
    display: flex;
    flex-direction:column;
	width:600px;
	
}

.one11 {
    width:350px;
	color:white;
    height: 250px;
	overflow:hidden;
	background-color:black;
	text-align:center;
	padding:10px;

}

	#mainr {
    display: -webkit-flex; /* Safari */
    -webkit-flex-direction: row-reverse; /* Safari 6.1+ */
    display: flex;
    flex-direction:row;
	width:1300px;
	height:400px;
	margin-left:60px;

}

.oner {
	margin-left:10px;
    width:300px;
	color:black;
    height: 290px;
	overflow:hidden;
	background-color:white;
	text-align:center;
    box-shadow:0px 0px 1px 1px #e8eaed;
	

}










#maine {
  
    background-color:white;
	display:flex;
	flex-direction: row;
	color:black;
border-bottom:2px solid gray;
 
}

.one1 {

	color:black;
	background-color:;
	text-align:center;
	padding:10px;
		overflow:hidden;
}



.one {

	color:black;
	background-color:;
	text-align:center;
	padding:10px;
	
}


.two2{

	margin-right:10px;
	padding:5px 15px;
	font-size:15px;
}

.two3{

	margin-right:10px;
	margin-top:80px;
	margin-bottom:50px;
	padding:5px 15px;
	font-size:18px;
}

.fou{
	


	margin-top:320px;
	margin-right:20px;
}

.fou ul {


}
.fou ul li{
		display:inline-block;
}


.fou li a{
	text-decration:none;

	
}












</style>

	
	
	
		 <div class="row">  
		
  
  <div class="col-md-8">

     @foreach($Newsportal as $newsportal)   
  <marquee><a href ="">
  <h3 style="font-size:25px;margin-left:50px;color:red;" >
  Breaking News : {{$newsportal->breaking}}  </h3></a></marquee>
  <img class="big" src='/uploads/{{$newsportal->image}}' style="width:600px; height:280px;
  margin-left:50px;"><br/></a>
    <h3 style="font-size:18px;margin-left:50px;color:blue;">
  {{$newsportal->title}}</h3>

  </div>
  <hr>

@endforeach
<br/>
  <br/>
  
     <div class="col-md-4">
	 
	       <div id="maine">
<div class="two3">
<form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>


  
  </div>
	 
</div>
	   @foreach($Newspost as $newspost)
	 
	 
  <div id="maine">



  <div class="two2"> <img class="big" src='/uploads/{{$newspost->avatar}}' style="width:100px; height:60px;"></div>
  <div class="two2">{{$newspost->title}}</div>

  
  </div>
    <div id="maine">



  <div class="two2"> <img class="big" src='/uploads/{{$newspost->avatar}}' style="width:100px; height:60px;"></div>
  <div class="two2">{{$newspost->title}}</div>

  
  </div>
    <div id="maine">



  <div class="two2"> <img class="big" src='/uploads/{{$newspost->avatar}}' style="width:100px; height:60px;"></div>
  <div class="two2">{{$newspost->title}}</div>

  
  </div>

  </div>

  
  
  
            </div>
<hr/>
<br/>







<div id="mainr">

   
 
  <div class="oner">
  <img class="big" src='/uploads/{{$newspost->avatar}}' style="width:300px; height:130px; "><br/>
  <h3 style="font-size:20px; color:blue;">
  
            {{$newspost->title}}<br/></h3>
                    
					Category :{{$newspost->category}}<br/>  <br/>     
   <button type="button" class="btn btn-secondary btn-sm">read more</button>
  </div>
 
 
      	<div class="oner">
		<img class="big" src='/uploads/{{$newspost->avatar}}' 
  style="width:300px; height:130px; "><br/>
  <h3 style="font-size:20px; color:blue;">
  {{$newspost->title}}<br/></h3>
   Category :{{$newspost->category}}<br/>  <br/>     
   <button type="button" class="btn btn-secondary btn-sm">read more</button>
  </div>
  <div class="oner">
  <img class="big" src='/uploads/{{$newspost->avatar}}' 
  style="width:300px; height:130px; "><br/>
  <h3 style="font-size:20px; color:blue;">
  {{$newspost->title}}<br/></h3>
   Category :{{$newspost->category}}<br/>  <br/>     
   <button type="button" class="btn btn-secondary btn-sm">read more</button>
  </div>
  <div class="oner">
  <img class="big" src='/uploads/{{$newspost->avatar}}' 
  style="width:300px; height:130px; "><br/>
  <h3 style="font-size:20px; color:blue;">
  {{$newspost->title}}<br/></h3>
   Category :{{$newspost->category}}<br/>  <br/>     
   <button type="button" class="btn btn-secondary btn-sm">read more</button>
  </div>


  </div>

   
   @endforeach



	  


  

  
  
  



@endsection

@section('extrafooter')

@endsection











