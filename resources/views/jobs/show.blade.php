@extends('layouts.app')
@section('content')
<center>
  <table class="table"><thead><tr><th scope="col">#</th><th scope="col">Title</th><th scope="col">Locations</th><th scope="col">Category</th><th scope="col">Requirements</th><th scope="col">Salary</th><th scope="col">Posted At</th></tr></thead>
		<tr>
		   <th scope="row">{{$jobs->id}}</th>
       <td>{{$jobs->title}}</td>
		<td>{{$jobs->location}}</td>
		<td>{{$jobs->category}}</td>
		<td>{{$jobs->requirements}}</td>
		<td>{{$jobs->salary}}</td>
    <td>{{$jobs->updated_at}}</td>
@if(Auth::user()&&$jobs->user_id <> Auth::user()->id)
  @if(Auth::user()->applied($jobs->id))
    <td>Already Applied</td>
@endif
@endif
@if((Auth::user()&&$jobs->user_id <> Auth::user()->id&&Auth::user()->applied($jobs->id)==False) || Auth::user()==False)
    <td><a href='/jobs/apply/{{$jobs->id}}'> Apply Now </a></td>
    @endif
    @if(Auth::user()&&$jobs->user_id == Auth::user()->id)
    <td><h1>You can't apply for this job.</h1></td>
    @endif
		</tr>
	</table></center>

<style type="text/css">
  
  
</style>



@endsection