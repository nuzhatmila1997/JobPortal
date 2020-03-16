@extends('layouts.app')
@section('content')
<form action="/jobs/store" method="POST">
	@csrf
	<center>
		
		
<div style="top: 50% border: 2px solid gray; border-radius: 20px; width: 30%; background-color:green;opacity: 0.8">
<h1><font color="black"> Post New Job</font></h1>
 Title : <input type="text" name="title"><br /><br />
 	Location: <input type="text" name="location"><br /><br />
		Category: 
		<select name="category">
	<option value="">~Select~</option>
<option value="IT">IT/Telecommunication</option>
<option value="EEE">Electrical</option>
<option value="Civil">Civil</option>
</select><br/><br/>
Salary: <input type="text" name="salary"><br /><br />
Requirements:
			<textarea name="requirements"></textarea><br /><br />

<button style="width: 100px; height: 30px; border-radius: 20px; "type="submit"> Create </button><br /><br />
<a href="/jobs/showjoblist">Show Jobs</a><br /><br />
</div></center></form>
@endsection