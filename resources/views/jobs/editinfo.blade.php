@extends('layouts.app')
@section('content')
<form action="/jobs/update/{{$jobs->id}}" method="POST">
	@csrf
	<center>
		
		
<div style="top: 50% border: 2px solid gray; border-radius: 20px; width: 30%; background-color:green;opacity: 0.8">
<h1><font color="black"> Post New Job</font></h1>
 Title : <input type="text" name="title" value="{{$jobs->title}}"><br /><br />
 	Location: <input type="text" name="location" value="{{$jobs->location}}"><br /><br />
		Category: 
		<select name="category" value="select">
	<option value="">{{$jobs->category}}</option>
<option value="IT">IT/Telecommunication</option>
<option value="EEE">Electrical</option>
<option value="Civil">Civil</option>
</select><br/><br/>
Salary: <input type="text" name="salary"value="{{$jobs->salary}}"><br /><br />
Requirements:
			<textarea name="requirements">{{$jobs->requirements}}</textarea><br /><br />

<button style="width: 100px; height: 30px; border-radius: 20px; "type="submit"> Update </button><br /><br />
<a href="/jobs/showjoblist">Show Jobs</a><br /><br />
</div></center></form>
@endsection