@extends('layouts.app')
@section('title','SHOW')

@section('content')
<div class="container ">
<div class="row justify-content-center">
    <div class="col-md-8 ">

        {{-- search form-container --}}
                <div class="job-details  py-5">

                    <p class="fw-bold fs-3">{{ $job->job_title }} ({{ $job->location }})</p>
                    <small>
                        <div class="publisher my-2">

                            <div class="author-img">
                                <img src="{{ asset('assets/default_picture.png') }}" alt="">
                            </div>
                            <div class="author-name mx-2">
                                <small> posted_by :{{ $job->user->name }}</small>
                            </div>
                        </div>

                    </small>
                    <hr>
                    <small class="data fs-6">
                        <p>Job_description</p>
                       {{ $job->description }}
                    </small>
                     <br> <br>
                    <small>Category<i class="fa fa-cogs mx-2"></i>:<b> {{ $job->category }}</b></small>
                    &nbsp;&nbsp;&nbsp;
                     <small>Published on <i class="fas fa-calendar mx-2"></i>:{{ date('D-M-Y',strtotime($job->created_at)) }}</small>
            <br>
                <small>
                    <ul class="list-group my-4">
                        <li class="list-group-item">
                            <span class="fw-bold">Job Title</span>:{{ $job->job_title }}
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Salary</span>:Ugx: {{ number_format($job->salary) }}
                        </li>
                        <li class="list-group-item">

                            <span class="fw-bold">Company Email</span>:{{ $job->contact_email}}
                        </li>
                        <li class="list-group-item">

                            <span class="fw-bold">Location</span>:{{ $job->location}}
                        </li>

                      </ul>

                      {{-- footer_buttons --}}
                        <span>
                            <a href="{{ route('welcome') }}" class="text-decoration-none">
                                <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-angle-left mx-2"></i> Go Back</button>
                            </a>
                        </span>

                        <span>
                            <a href="{{ route('report.index',$job->id) }}" class="text-decoration-none">
                                <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-print mx-2"></i>Print Details</button>
                            </a>
                        </span>
                       {{-- footer_buttons --}}
                </small>

                </div>
           {{-- search form-container --}}



    </div>
</div>
</div>
@endsection
