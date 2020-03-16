@extends('layouts.app')
@section('content')
<center><table class="table"><thead><tr><th scope="col">#</th><th scope="col">Title</th><th scope="col">Locations</th><th scope="col">Category</th><th scope="col">Requirements</th><th scope="col">Salary</th><th scope="col">Posted At</th></tr></thead>
  <div class="container">
    <div class="jumbotron">
      
  <form>
            <input type='text' name='search' placeholder='search'/>
            <input type='submit' value='Search'/>
          </form>
    </div>
    </div>

		@foreach($jobs as $jobs)
		<tr>
      <th scope="row">{{$jobs->id}}</th>
		
		<td>{{$jobs->title}}</td>
		<td>{{$jobs->location}}</td>
		<td>{{$jobs->category}}</td>
		<td>{{$jobs->requirements}}</td>
		<td>{{$jobs->salary}}</td>
		<td>{{$jobs->updated_at}}</td>
		<td><a href='/jobs/show/{{$jobs->id}}'> Details </a></td>
    @if($jobs->user_id <> Auth::user()->id)
    @if(Auth::user()->applied($jobs->id))
    <td>Already Applied</td>
    @else
    <td><a href='/jobs/apply/{{$jobs->id}}'> Apply Now </a></td>
    @endif
    @else
    <td><a href="/jobs/viewapplications/{{$jobs->id}}">View Applications</a></td>
    @endif
    @if(Route::has('login')&&$jobs->user_id == Auth::user()->id)
    @auth
    <td><a href='/jobs/afterremovejoblist/{{$jobs->id}}'> Remove </a></td>
    <td><a href='/jobs/editinfo/{{$jobs->id}}'> Edit </a></td>
    @endauth
    @endif

		</tr>
		@endforeach
		
	
	</table></center>

<style type="text/css">
  
 
</style>

@endsection