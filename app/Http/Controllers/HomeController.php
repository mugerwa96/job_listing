<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs=job::where('status',1)->orderBy('updated_at','desc')
        ->paginate(5);
        return view('welcome',compact('jobs'));

    }
}
