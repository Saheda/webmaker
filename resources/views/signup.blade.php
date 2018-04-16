
@extends('inbox')
@section('content')

<style>
.card{
background-color:#cce6ff;
margin-left:200px;
box-shadow:10px 15px #009999;
	
	
}



</style>


<div class="row">
<div class="col-md-8">


<div class="card">
<div class="card-body">

        
        <form>
            <p class="h4 text-center py-4">Sign up</p>


            <div class="md-form">
                <i class="fa fa-user "></i>
                <input type="text" id="name" class="form-control" placeholder="Your Name">
                <label class="font-weight-light">Your name</label>
            </div>

            
            <div class="md-form">
                <i class="fa fa-envelope "></i>
                <input type="email" id="email" class="form-control"placeholder="@email">
                <label class="font-weight-light">Your email</label>
            </div>
            <div class="md-form">
                <i class="fa fa-lock "></i>
                <input type="password" class="form-control" placeholder="Password">
                <label class="font-weight-light">Your password</label>
            </div>
     <div class="md-form">
                <i class="fa fa-lock "></i>
                <input type="confirmpassword" class="form-control" placeholder="Re-Type">
                <label class="font-weight-light">Confirm password</label>
            </div>

            <div class="text-center">
                <button class="btn btn-cyan" type="submit">Register</button>
            </div>
        </form>
</div>
</div>

    </div>

</div>
			  
			  @endsection

@section('extrafooter')

@endsection
