@extends('layouts.app')
@section('content')
<center><table border= '2' border-color= 'green' cellspacing='1'><thead><tr><th class='widthadjust'>Title</th><th class='widthadjust'>Locations</th><th class='widthadjust'>Category</th><th class='widthadjust'>Requirements</th><th class='widthadjust'>Salary</th><th class='widthadjust'>Posted At</th></tr></thead>

    @foreach($jobs as $jobs)
    <tr>
    
    <td>{{$jobs->title}}</td>
    <td>{{$jobs->location}}</td>
    <td>{{$jobs->category}}</td>
    <td>{{$jobs->requirements}}</td>
    <td>{{$jobs->salary}}</td>
    <td>{{$jobs->updated_at}}</td>
    <td><a href='/jobs/show/{{$jobs->id}}'> Details </a></td>
    <td><a href='/jobs/afterremovejoblist/{{$jobs->id}}'> Remove </a></td>
    <td><a href='/jobs/editinfo/{{$jobs->id}}'> Edit </a></td>
    </tr>
    @endforeach
    
  
  </table></center>

<style type="text/css">
  
  table thead {
    font-weight: bold;
    color: green;
  }

  table tbody td {
    text-align: center;
    border: solid 1px #333333;
    background: white;
  }
  table tbody tr:nth-child(odd) td {
    background: white;
    opacity: 0.9;
  }

  table tbody tr:nth-child(even) td {
    background: white;
    opacity: 0.9;
  }

  table tfoot td {
    background: #cccccc;
    text-align: center;
  } 
</style>



@endsection