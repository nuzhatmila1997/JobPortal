<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<title>Online Job Portal</title>
	<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link href="download.png" type="img/icon" rel="icon">
        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
  		$('#btn').click(function(){
  			$('#nav').slideToggle();
  		});
  	});
  </script>

</head>
<body>
	<div>
		<div id = "header">
			<div id= "logo">
				<h1><font color="orange" style="font-family: monospace;"> Job Portal</font></h1>
			</div>
			<div><button id="btn" style="width: 120px; height: 30px;opacity: 0.8;font-family: sans-serif;">Click</button></div>
			<div id="nav">
				<ul>
					<li><a href="/"><font style="font-size: 15px; font-family: monospace;">Home</font></a></li>
					
					@if (Route::has('login'))
					 @auth
                        
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ url('/home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                </li>
                            <li><a href="/jobs/myjobs"><font style="font-size: 15px; font-family: monospace;">My Jobs</font></a></li>
                                    
                            <li><a href="{{url('/logout')}}"> <font style="font-size: 15px; font-family: monospace;">Logout</font></a></li>

                       @else

                        <li><a href="{{ route('login') }}"><font style="font-size: 15px; font-family: monospace;">Login</font></a></li>


                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"><font style="font-size: 15px; font-family: monospace;">Register</font></a></li>
					
                        @endif
                    @endauth
                
            @endif
					
					<li><a href="/jobs"><font style="font-size: 15px; font-family: monospace;">Post Job</font></a></li>
					
					
					


				</ul>
			</div>
		</div>
	</div>
	<div class="header">
	
			@yield('content')
</div>

</body>
</html>
<!--
<div class="search-box">
			<input class="search-txt" type="text" name="search-field job" placeholder="Job Type..">
			<a class="search-btn" href="#">
			<i class="fas fa-search"></i></a>
		</div>
		-->