



@extends('inbox')








@section('header')
@endsection

@section('content')





@section('assets')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection



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
	padding:25px;
	
		overflow:hidden;
}



.one {

	color:black;
	background-color:;
	text-align:center;
	padding:10px;
	
}


.two2{

  
	padding:5px 15px;
	font-size:15px;
	
}

.two3{

	   margin-top:50px;
	 margin-bottom:10px;
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


#click{
	background-color:#e6e6e6;
	width:1100px;
}









</style>












	<br/>
      

		    @foreach($Newspost as $newspost)
		
		 <div class="col-md-12">
		    @foreach($Newsportal as $newsportal) 
  <h3 style="font-size:25px;margin-left:50px;color:red;font-weight:bold;" >
       Breaking News :</h3>
  <marquee><a href ="">
  <h3 style="font-size:25px;margin-left:50px;color:red;" >
 {{$newsportal->breaking}}  </h3></a>

    <h3 style="font-size:18px;margin-left:50px;color:blue;">
  {{$newsportal->title}}</h3>
</marquee>


@endforeach


  </div>
		
		
<div id="main">
         <div class="row">
		
  <div class="col-sm-6">
 <div id="click">
  <h2 style="margin-top:40px; margin-bottom:40px; margin-left:70px;">{{$newspost->title}}</h2>

 
  <img class="big" src='/uploads/{{$newspost->avatar}}' style="width:600px; height:270px; margin-left:50px;"><br/><br/>

  <div class="one1">


  {{$newspost->description}}	

         </div>
             <br/><br/><br/>
	 

</div>
	</div>



 

     <div class=" col-sm-5">
<div class="two">

<i class="far fa-filter"></i>Category :{{$newspost->category}}<br/>
 <i class="fa fa-btn fa-user"></i>  Reporter Name :{{$newspost->reporter}}<br/>
<i class="fab fa-calendar-alt"></i>	Posted Date :  {{$newspost->date}}
  <br/>
 
  
</div>
</div>

</div>

<div class="col-md-3">
<div class="tw">
	 
	       <div id="maine">
<div class="two3">
<form action="{{url('search')}}" method="post">

 {{csrf_field()}}
 <input type="hidden" name="search" value="{{csrf_token()}}">

      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
<h6 style="padding-top:80px;">Latest News </h6>

  
  </div>
  <br/>
	
</div>
</div>

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
<div class="four">
<h5>Share With:</h5>
		<ul>
   <li><a href="#"> <i style="font-size:25px;"class="fab fa-facebook"></i>
  Facebook</a></li>
   <li><a href="#"> <i style="font-size:25px;" class="fab fa-twitter"></i>
  Twitter</a></li>
   <li><a href="#"> <i style="font-size:25px;" class="fab fa-linkedin"></i>
  Linkedin</a></li>

  </ul>
</div>
  
  
  
  
  </div>

  
  



                   </div>
  
	

  


  
  
  
 
    

  
  





   @endforeach
   














@endsection

@section('extrafooter')

@endsection











