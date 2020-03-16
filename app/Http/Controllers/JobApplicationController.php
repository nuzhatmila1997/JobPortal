<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobApplication;
use App\Jobs;
use auth;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewresume($id)
    {
        $job_application = JobApplication::Find($id);
        return view('jobs.viewresume',compact('job_application'));
        //
    }
    public function viewapplications($id)
    {
        $jobs = Jobs::Find($id);
        $job_application = JobApplication::all();
       return view('jobs.viewapplications', ['job_application' => $job_application],['jobs'=>$jobs]);

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
    }
    public function applyform($id)
    {
        $jobs = Jobs::Find($id);
        return view('jobs.apply',['jobs'=>$jobs]);
    }
    public function apply(Request $request, $id)
    {
        $jobs = Jobs::Find($id);
        $application = new JobApplication();
        $application->user_id = Auth::user()->id;
        $application->job_id = $jobs->id;
        
        $application->fname = $request->fname;
        $application->lname = $request->lname;
        $application->phone = $request->phone;
        $application->address = $request->address;
        if($request->hasfile('resume'))
        {
            $request->validate([
         'resume'  => 'required|mimes:dotx,docx,pdf',
       ]);
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/resume/', $filename);
            $application->resume = $filename;
        }
        else
        {
            return $request;
            $application->resume = '';
        }
        $application->save();
        return redirect('/jobs/show/'.$jobs->id);

    }
}
