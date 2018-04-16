@extends('inbox')








@section('header')



@endsection

@section('content')

@section('assets')

<link href="{{asset('css/style2.css')}}" rel="stylesheet">
@endsection



<style>

.card{
	background-color:#a6a7a8;
}

</style>


<br/>
<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-10 col-md-8-offset-2 ">

<div class="card">
<h4 style="text-align:center;">Add news <hr></h4><br/>




<br>

<form action="{{url('post')}}" method="post" enctype="multipart/form-data">
 {{csrf_field()}}
<div class="form-group">

   <input type="hidden" class="form-control"  value="{{ Auth::user()->id}}" name="user_id" aria-describedby="" placeholder="title">
    <label >News Title</label>
    <input type="text"id="text" class="form-control" id="text" name="title" aria-describedby="" placeholder="title">

  </div>
 
  <div class="form-group">
    <label name="category" id="text">News Category</label>

	 <select class="form-control" name="category">
	       <option>Select any catagory</option>
      <option>Breaking News</option>
      <option>Government</option>
      <option>Media</option>
      <option>Politics</option>
      <option>Sports</option>
	     <option>Technology</option>
      <option>Weather</option>
      <option>Current Events</option
	    <option>Regional News</option>
      <option>Environmental</option>
      <option>Colleges and Universities</option>
    </select>
  </div>
  

   
  <div class="form-group">
  
    <label for="exampleSelect2" id="text" name="description"	textarea rows="4" cols="50" >Description</label>
        <textarea class="form-control" rows="3" name="description"></textarea>
     </div>
	 
	   <div class="form-group">
      <label >Reporter</label>
    <input type="text" id="text" class="form-control" id="text" name="reporter" aria-describedby="" placeholder="name">
   
     </div>
 
 
    <div class="form-group"> 
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY">
     </div>
	


    <div class="form-group">
<input type="file" name="avatar">
<br/>
<input type="hidden" name="_token" value="{{csrf_token()}}">

</div>

 
 

  <input type="submit"  value="submit" class="btn btn-primary"> 

  <br/>

</form>




    </div>

	  </div>
       </div>
<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-10 col-md-8-offset-2 ">

<div class="card">





<br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Breaking News
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="{{url('newsportal')}}" method="post" enctype="multipart/form-data">
 {{csrf_field()}}
  <input type="hidden" class="form-control"  value="{{ Auth::user()->id}}" name="user_id">
<div class="form-group">

    <label >Breaking News</label>
    <input type="text"id="text" class="form-control" name="breaking" aria-describedby="" placeholder="title">

  </div>
 


   

	   <div class="form-group">
      <label >Title</label>
    <input type="text" id="text" class="form-control"  name="title" aria-describedby="" placeholder="name">
   
     </div>
 
 
	


    <div class="form-group">
<input type="file" name="image">
<br/>
<input type="hidden" name="_token" value="{{csrf_token()}}">

</div>

 
  <input type="submit"  value="submit" class="btn btn-primary"> 
  





  <br/>

</form>




    </div>

	  </div>
       </div>

      </div>
  
    </div>
  </div>
</div>











	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   

@endsection

@section('extrafooter')

@endsection






