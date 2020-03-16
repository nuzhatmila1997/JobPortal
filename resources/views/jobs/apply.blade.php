@extends('layouts.app')

@section('content')
<div class="container">

    <div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Apply</div>
                @if(Auth::user()&&$jobs->user_id <> Auth::user()->id)
                <form method='POST' enctype="multipart/form-data" action="/jobs/{{$jobs->id}}/apply">
                    @csrf
                    <label>
                        Enter First Name <input type='text' name='fname'/> 
                    </label><br/>
                    <label>
                        Enter Last Name <input type='text' name='lname'/> 
                    </label><br/>
                    <label>
                        Phone <input type='text' name='phone'/> 
                    </label><br/>
                    <label>
                        Address <input type='text' name='address'/> 
                    </label><br/>

                    <label>
                        Upload Resume <input type='file' name='resume'/> 
                    </label><br/>
                    <button type="submit"> Submit </button>
                </form>
                @else
                <h1>You Can't Apply To Your Own Job!</h1>
               @endif

            </div>
        </div>
    </div>
</div>
@endsection
