@extends('layouts.app')
@section('content')
<center>
<h3>Resume of {{$job_application->user->name}}</h3>
<p>
<iframe src="{{url('uploads/resume/'.$job_application->resume)}}" style="width: 800px; height: 900px"></iframe>
</p>
</center>
@endsection