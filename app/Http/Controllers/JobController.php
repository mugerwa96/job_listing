<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct()
    {
       return  $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        return view('welcome');
    }
    public function show()
    {
        return view('show');
    }
    public function create()
    {
        return view('create');
    }

}
