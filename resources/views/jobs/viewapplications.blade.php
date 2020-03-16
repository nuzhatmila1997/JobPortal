@extends('layouts.app')
@section('content')
<center>
  <table class="table"><thead><tr><th scope="col">#</th><th scope="col">First Name </th><th scope="col">Last Name</th><th scope="col">Email</th><th scope="col">Phone</th><th scope="col">Address</th></tr></thead>
    
		@foreach($job_application as $application)
    @if($application->job_id==$jobs->id)
    <tr>
      <th scope="row">{{$application->id}}</th>
    
    <td>{{$application->fname}}</td>
    <td>{{$application->lname}}</td>
    <td>{{$application->user->email}}</td>
    <td>{{$application->phone}}</td>
    <td>{{$application->address}}</td>
    <td><a href='/jobs/viewresume/{{$application->id}}'> View Resume </a></td>
    </tr>
    @endif
    @endforeach
    
    
	</table></center>

<style type="text/css">
  
  
</style>



@endsection