<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\JobApplication;
use auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$jobs = Jobs::all();
        return view('jobs.newjob');
    }
    public function search(Request $request)
    {
       if($request->search) {
         $jobs = Jobs::where("title", 'like', '%' . $request->search . '%')->orWhere("category", 'like', '%' . $request->search . '%')->orWhere("location", 'like', '%' . $request->search . '%')->orWhere("requirements", 'like', '%' . $request->search . '%')->orWhere("salary", 'like', '%' . $request->search . '%')->get();
       }
       else {
          $jobs = Jobs::all();
       }
       return view('jobs.showjoblist',['jobs' => $jobs]);
       
    }
    public function searchwithform(Request $request)
    {
     $jobs = Jobs::where('location','like','%' . $request->location.'%' )->Where('category', 'like','%' . $request->category. '%' )->get();
     
        return view('jobs.viewjobs', ['jobs' => $jobs]);
   
        
    }
    public function my_jobs()
    {
        $jobs = Jobs::where('user_id', '=', Auth::user()->id)->get();
        return view('jobs.myjobs', ['jobs' => $jobs]);
   
    }
    public function showalljobs()
    {
        //
        $jobs = Jobs::all();
       return view('jobs.showjoblist', ['jobs' => $jobs]);
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $jobs = new Jobs();
        $jobs->title = $request->title;
        $jobs->location = $request->location;
        $jobs->category = $request->category;
        $jobs->requirements = $request->requirements;
        $jobs->salary = $request->salary;
        $jobs->user_id = Auth::user()->id;
        $jobs->save();
        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $jobs = Jobs::Find($id);

        return view('jobs.show',['jobs'=>$jobs]);
    }
    public function viewjobs(Request $request)
    {
        if($request->search) {
         $jobs = Jobs::where("title", 'like', '%' . $request->search . '%')->orWhere("category", 'like', '%' . $request->search . '%')->orWhere("location", 'like', '%' . $request->search . '%')->orWhere("requirements", 'like', '%' . $request->search . '%')->orWhere("salary", 'like', '%' . $request->search . '%')->get();
       }
       else {
          $jobs = Jobs::all();
       }
       
        
        return view('jobs.viewjobs',['jobs'=>$jobs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jobs =Jobs::Find($id);
        return view('jobs.editinfo',['jobs'=>$jobs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $jobs = Jobs::Find($id);
        $jobs->title = $request->title;
        $jobs->location = $request->location;
        $jobs->category = $request->category;
        $jobs->requirements = $request->requirements;
        $jobs->salary = $request->salary;
        $jobs->user_id = Auth::user()->id;
        $jobs->save();
        return redirect('/jobs');
        

        //$jobs->update($request->all());

        //return redirect()->route('jobs.show')->with('success','Post updated successfully');
    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jobs = Jobs::destroy($id);
        return view('jobs.afterremovejoblist',['jobs'=>Jobs::all()]);

    }
}
