@extends('layouts.app')

@section('content')
<div class="container">

    <div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                 <h2> Hello {{Auth::user()->name}} </h2> 
                @if (Auth::user()->profilepic)
                  <img width="200" height="200" src="{{Auth::user()->profilepic}}" alt='profile picture'/>
                @endif
                <form method='POST' enctype="multipart/form-data" action="/upload_avatar">
                    @csrf
                    <label>
                        <input type='file' name='file'/> Upload
                    </label>
                    <button type="submit"> Submit </button>
                </form>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
