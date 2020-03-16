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
   	</tr>
		@endforeach
		
	
	</table></center>
  

<style type="text/css">
  
  
</style>



@endsection