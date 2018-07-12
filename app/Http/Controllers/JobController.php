<?php

namespace App\Http\Controllers;

use App;
use App\Job;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJob;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::with('category')->orderBy('created_at','desc')->paginate(5);
        return view('admin.jobs.index',compact('jobs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.jobs.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJob $request)
    {
        $job = new Job;
        $job->name_en = $request->name_en;
        $job->name_fr = $request->name_fr;
        $job->name_nl = $request->name_nl;
        $job->description_en = $request->description_en;
        $job->description_fr = $request->description_fr;
        $job->description_nl = $request->description_nl;
        $job->skills_en = $request->skills_en;
        $job->skills_fr = $request->skills_fr;
        $job->skills_nl = $request->skills_nl;
        $job->location_en = $request->location_en;
        $job->location_fr = $request->location_fr;
        $job->location_nl = $request->location_nl;
        $job->categories_id= $request->category;
        if($request->image != null){
            $job->image = App::make('ImageResize')->imageStore($request->image, 'jobs', 720 , null);
        }
        if($job->save()){
        return redirect()->route('jobs.index')->with([
            "status"=> "Success",
            "message"=> "You have successfully added a Job",
            "color"=> "success"
            ]);
        }else{
            return redirect()->route('jobs.index')->with([
                "status"=> "Warning",
                "message"=> "Unfortunately the new job did not save correctly",
                "color"=> "danger"
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('admin.jobs.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $categories = Category::all();
        return view('admin.jobs.edit',compact('job','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(StoreJob $request, Job $job)
    {
        $job->name_en = $request->name_en;
        $job->name_fr = $request->name_fr;
        $job->name_nl = $request->name_nl;
        $job->description_en = $request->description_en;
        $job->description_fr = $request->description_fr;
        $job->description_nl = $request->description_nl;
        $job->skills_en = $request->skills_en;
        $job->skills_fr = $request->skills_fr;
        $job->skills_nl = $request->skills_nl;
        $job->location_en = $request->location_en;
        $job->location_fr = $request->location_fr;
        $job->location_nl = $request->location_nl;
        $job->categories_id= $request->category;
        if($request->image != null){
            if($category->image != null){
                App::make('ImageDelete')->imageDelete($job->image, 'jobs');
            }
            $job->image = App::make('ImageResize')->imageStore($request->image, 'jobs', 720 , null);
        }
        if($job->save()){
        return redirect()->route('jobs.index')->with([
            "status"=> "Success",
            "message"=> "You have successfully modified a Job",
            "color"=> "success"
            ]);
        }else{
            return redirect()->route('jobs.index')->with([
                "status"=> "Warning",
                "message"=> "Unfortunately the Job was not changed",
                "color"=> "danger"
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        if($job->delete()){
            return redirect()->route('jobs.index')->with([
                "status"=> "Success",
                "message"=> "You have successfully removed a Job",
                "color"=> "success"
            ]);
        }else{
            return redirect()->route('jobs.index')->with([
                "status"=> "Warning",
                "message"=> "Unfortunately the Job was not removed, please try again",
                "color"=> "danger"
            ]);
        }
    }
}
