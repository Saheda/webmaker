





@extends('inbox')



@section('content')






<style>
.big{
	
	border-radious:50%;
}
.panel-heading{
	
	margin-left:250px;
}


.panel-body{
	margin-left:40px;
	
	
}



</style>



<div class="container"> 







 <div Class="row"> 


<div class="col-md-10 col-md-offset-1 ">
<div class="panel panel-default">
<h1>User Profile</h1>
<div class="panel-heading">






<img class="big" src='upload/support.jpg' style="width:200px; height:250px; border-radious:50px;"alt="no logo">
{{Auth::user()->name}}'s  Profile 


<form action="{{url('profile')}}" method="post" enctype="multipart/form-data">
<label>
Update Profile Picture<label><br/>
<input type="file" name="avatar">
<br/>
<input type="hidden" name="_token" value="{{csrf_token()}}">

<input type="submit" class="btn btn-cyan" value="submit">


</form>
</div>
<div class="panel-body">
<h3>
User Full Name: {{Auth::user()->name}}<br/>
Email :{{Auth::user()->email}}





</h3>
<br/>

<br/>
</div>


		</div>
		
		
		
		
 </div>


         
@endsection

@section('extrafooter')

@endsection
