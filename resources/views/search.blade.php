




@extends('inbox')








@section('header')
@endsection

@section('content')





@section('assets')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

<div class="container">
@if(isset($Newspost))

<table class="table table-striped">
<thead>
<tr>
<th>title</th>
<th>category</th>
</tr>
</thead>
<tbody>
@foreach($Newspost as $newspost)
<tr>
<td>{{$newspost->title}}</td>
<td>{{$newspost->category}}</td>
</tr>
@endforeach
</tbody>
</table>
@endif 
</div>









@endsection

@section('extrafooter')

@endsection


