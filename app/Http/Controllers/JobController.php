<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class  JobController extends Controller
{


// security  for all pages
        public function __construct()
        {
        return  $this->middleware('auth')->except(['index','show','search']);
        }
 // security  for all pages

//  welcome page_method
        public function index()
        {

            $jobs=job::where('status',1)->orderBy('updated_at','desc')->paginate(5);


            return view('welcome',compact('jobs'));
        }
//  welcome page_method

// showing a particular page basing on job id
        public function show($id)
        {
            $job=job::findorFail($id);
            return view('show',compact('job'));
        }
// showing a particular page basing on job id

 // adding anew list
        public function create()
        {
            return view('create');
        }
        public function store(Request $request)
        {
            $job=new job();
            $job->company=$request->company;
            $job->job_title=$request->jobtitle;
            $job->salary=$request->salary;
            $job->category=$request->category;
            $job->contact_email=$request->email;
            $job->description=$request->description;
            $job->location=$request->location;
            $job->status=$request->status?'1':0;
            $job->user_id=Auth::id();
            $job->save();
            return back()->with('message','Information saved');
        }
// adding new list

// search_section_start
        public function search(Request $request)
        {
            $category= $request->category;
            $jobs=job::where('status',1)->where('category',$category)->get();


            return view('search',compact('jobs'));
        }
// search_section_end

// edit and update_section
        public function edit($id)
        {
            $job=job::findorFail($id);
            return view('edit',compact('job'));

        }

        public function update( Request $request,$id )
        {

            $job=job::find($id);
            $job->company=$request->company;
            $job->job_title=$request->jobtitle;
            $job->salary=$request->salary;
            $job->category=$request->category;
            $job->contact_email=$request->email;
            $job->description=$request->description;
            $job->location=$request->location;
            $job->status=$request->status?'1':0;
            $job->user_id=Auth::id();
            $job->update();
            return back()->with('message','Information updated');
        }
// edit and update_section

// deleting a particular list
        public function destroy($id)
        {

            $job=job::find($id);
            $job->delete();
            return back();
        }
// deleting a particular list

// all my listings
        public function all($id)
        {
            $jobs=job::where('user_id',$id)
            ->orderBy('updated_at','desc')
            ->paginate(5);


            return view('all',compact('jobs'));
            // return view()
        }
// all my listings

// job count
        public function count()
        {
            // return "ok";
            $job_count=job::where('user_id',Auth::id())
            ->get()
            ->count();
            return $job_count;
        }
// job count
}
