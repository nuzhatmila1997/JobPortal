@extends('layouts.app')
@section('content')

<form action="/search" method="get">
	<center>
		
		
<div style=" border: 2px solid gray; border-radius: 20px; width: 30%; background-color: green;opacity: 0.8">
<h1><font color="black"> Search for jobs near you</font></h1>
 Enter Location : <select name="division">
 	<option value="">~Select~</option>
<option value="Dhaka">Dhaka</option>
<option value="Chittagong">Chittagong</option>
<option value="Rajshahi">Rajshahi</option>
<option value="Sylhet">Sylhet</option>
<option value="Khulna">Khulna</option>
<option value="Barisal">Barisal</option><br/><br/>
</select><br/>
Enter Category : <select name="category">
	<option value="">~Select~</option>
<option value="IT">IT/Telecommunication</option>
<option value="EEE">Electrical</option>
<option value="Civil">Civil</option>
</select><br/><br/>
<input style="width: 100px; height: 30px; border-radius: 20px;" name="searchform" type="submit" value="Search"><br/><br/>
@if(isset(Auth::user()->id))
<a href="/jobs/showjoblist">Show Jobs</a>
@else
<a href="/jobs/viewjobs">Show Jobs</a>
@endif


</div></center></form>
@endsection
