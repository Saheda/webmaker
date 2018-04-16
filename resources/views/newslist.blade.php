
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








<div class="row">
<div class="col-md-10 col-sm-10 col-xs-12">


<br>
<div class="card">
<h4 style="text-align:center;">Edit news <hr></h4><br/>

<form action="{{url('edit')}}" method="post" enctype="multipart/form-data">
 {{csrf_field()}}
<input type="hidden" name="id" value="{{$Newspost['id']}}">
  <div class="form-group">
    <label >News Title</label>
    <input type="text" class="form-control" id="text" value="{{$Newspost['title']}}" name="title" aria-describedby="" placeholder="Title">

  </div>
  <div class="form-group">
    <label name="category" value="{{$Newspost['category']}}" id="text">News Category</label>

	 <select class="form-control" name="category">
	       <option>Select any catagory</option>
      <option>Breaking News</option>
      <option>Government</option>
      <option>Media</option>
      <option>Politics</option>
      <option>Sports</option>
	     <option>Technology</option>
      <option>Weather</option>
      <option>Current Events</option>
	    <option>Regional News</option>
      <option>Environmental</option>
      <option>Colleges and Universities</option>
    </select>
  </div>
   
  <div class="form-group">
  
    <label for="exampleSelect2">Description</label>
        <textarea class="form-control" rows="3" name="description">{{$Newspost['description']}}</textarea>
     </div>
	 
	   <div class="form-group">
      <label >Reporter</label>
    <input type="text" id="text" value="{{$Newspost['reporter']}}" class="form-control" id="text" name="reporter" aria-describedby="" placeholder="name">
   
     </div>
 
 
    <div class="form-group"> 
        <label class="control-label" for="date">Date</label>
        <input class="form-control"  value="{{$Newspost['date']}}" id="date" name="date" placeholder="MM/DD/YYY">
     </div>
	


    <div class="form-group">
	<input type="file" name="avatar">
<br/>

<input type="hidden" name="_token" value="{{csrf_token()}}">

</div>

 
  <input type="submit"  value="submit" class="btn btn-primary"> 

</form>

  
  <br/>

<button type="button" id="" class="btn btn-outline-secodary btn-lg" ><a href="{{url('listview')}}">Show</a></button>

</div>

</div>
    </div>




@endsection

@section('extrafooter')

@endsection





