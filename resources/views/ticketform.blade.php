@extends('index')




@section('assets')
<link href="{{asset('css/style2.css')}}" rel="stylesheet">
@endsection


@section('content')
		<style>
		.box{
			width:900px;
			height:750px;
			border:1px solid black;
			margin-top:50px;
		}
		
		
		.box2{
			padding:50px 150px;
		}
		
		</style>
		
		
<div class="container">
<div class="row">
         <div class="box">
	<div class="col-xs-12 col-sm-8 col-md-8 ">
	
	<h3 style="width:880px; padding:15px 15px; border-bottom:1px solid black; "> Create new Ticket </h3>
        <div class="box2">

                     <br>

                        <form action="{{url('ticketform')}}" method="post" >
                        {{csrf_field()}}
            <div class="form-group">

                       <input type="hidden" class="form-control"  value="{{ Auth::user()->id}}" name="user_id">
                         <label >User</label>
                       <input type="text"id="text" class="form-control" name="user">
            </div>
	        <div class="form-group"> 
                         <label class="control-label" for="date">Date</label>
                       <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY">
             </div>
	
	        <div class="form-group">
                          <label >Subject</label>
                        <input type="text" id="text" class="form-control" name="subject" placeholder="write your problem title">
            </div>
	  
        <div class="form-group">
                       <label name="type" id="text">Type</label>

	                           <select class="form-control" name="type">
	                                <option>Select</option>
                                    <option>Breaking News</option>
                                    <option>Government</option>
                                    <option>Media</option>
                              </select>
        </div>
	<div class="form-group">
              <label name="topic" id="text">Help Topic</label>

	      <select class="form-control" name="topic">
	          <option>Select</option>
             <option>Breaking News</option>
             <option>Government</option>
             <option>Media</option>
         </select>
    </div>
    <div class="form-group">
  
               <label for="exampleSelect2" id="text" name="description"	textarea rows="4" cols="50" >Description</label>
            <textarea class="form-control" rows="3" name="description"></textarea>
    </div>
	 
	         <input type="submit"  value="submit" class="btn btn-primary"> 

  <br/>

                    </form>
        </div>
		</div>
             </div>
</div>    
</div>
		
		
		
		
		
		
@endsection
		
		
		

