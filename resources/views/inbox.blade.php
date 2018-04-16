<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  

  
  
  
 @yield('assets')

</head>

<body>

@include('includes.header_navigation')





@yield('header')
<style>
.topnav {
 overflow:hidden;
 line-height:1.5em;
 background-color:#d9dde2;
 box-shadow:inset 0 0 2px #000000;
 color:white;
 margin:auto;
}


.topnav > ul>li{
  line-height:1.5em;
  float:left;
  display: inline-block;
  color:white;
  text-align: center;
  padding: 15px 15px;
  text-decoration: none;
  font-size: 25px;
  box-shadow:inset 0 0 18px gray;
  font-weight:bold;
}
.top > ul>li{
  box-shadow:inset 1px 0px 2px gray;
  border-left:1px solid gray;
  line-height:1.5em;
  padding: 14px 25px;
  float:right;
  display: inline-block;
  color:white;
  text-align: center;
  font-weight:bold;
  font-size: 20px;

  
}

.topnav >ul >li>a{
  text-decoration: none;

  color:white;

}
.top >ul >li>a{
  text-decoration: none;
  color:#072044;
   

}











  </style
  
  <div class="row">
      

<div class="col-md-9">


<img class="big" src='/upload/news.jpg'  style=" width:100%;  margin-left:150px; height:230px;">


         </div>
        
</div>


  
  

    

    <div class="col-md-12 col-xs-12">
	<div class="topnav">
	  <ul>
    <li>
	
	<a href="#">OOPSE NEWS</a></li>
	

  </ul>
  	<div class="top">
  <ul >
    <li><a href="#">Contact</a></li>
    <li><a href="{{url('news')}}">Updated News</a></li>
    <li><a href="{{url('post/index')}}">Add Post</a></li>
    <li><a href="{{url('readmore')}}">News Feed</a></li>
  </ul>
   </div>
</div>

</div>





@yield('content')



<script src="{{ asset('js/app.js') }}"></script>


@yield('extrafooter')
<h1></h1>

</div>
</div>


</body>

</html>