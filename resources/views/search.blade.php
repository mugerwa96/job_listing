@extends('layouts.app')
@section('title','SEARCH')
@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8 ">

           {{-- latest_job-container-start --}}

           <div class="latest-job-container ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <span ">
                        <a href="{{ route('welcome') }}">
                            <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-angle-left mx-2"></i> Go Back</button>
                        </a>
                    </span>
                        <h3 class="fw-bold text-muted mb-5 mt-3">Search Results  ( {{ $jobs->count() }} ) </h3>

                       @foreach ($jobs as $job)

                        {{-- job-container-start --}}
                        <div class="job-container my-5">
                                <div class="line "></div>
                                <div class="job-container-all ">

                                    <p class="fw-bold fs-5">{{ Str::upper($job->job_title) }} ({{ $job->location }})</p>

                                    <small class="data">
                                        {{ Str::limit($job->description, 150, '')  }}
                                        @if (Str::length($job->description)>150)

                                        <a href="{{ route('show',$job->id) }}" class="text-decoration-none">
                                            ...<small>read more <i class="fas fa-arrow-right-long"></i></small>
                                        </a>
                                        @endif
                                        @auth
                                            @if (Auth::id()==$job->user_id)

                                            <button type="button" class="btn btn-danger btn-sm my-2"><i class="fas fa-trash-can mx-2"></i> </button>
                                            <button type="button" class="btn btn-warning btn-sm my-2"><i class="fas fa-pen-to-square mx-2"></i> </button>
                                            @endif
                                        <br>

                                        @endauth

                                    </small>
                                    <br>

                                    <small>Category<i class="fa fa-cogs mx-2"></i>:<b>{{ $job->category }}</b></small>
                                        &nbsp;&nbsp;&nbsp;
                                    <small>Published on <i class="fas fa-calendar mx-2"></i>:{{ date('D-M-Y',strtotime($job->created_at)) }} </small>
                                    <small>
                                        <div class="publisher my-2">

                                            <div class="author-img">
                                                <img src="{{ asset('assets/default_picture.png') }}" alt="">
                                            </div>
                                            <div class="author-name mx-2">
                                                <small>Posted_by :{{ $job->user->name }}</small>
                                            </div>
                                        </div>

                                    </small>
                                </div>
                                <div class="job-continaer-view">
                                    <a href="{{ route('show',$job->id) }}">
                                        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye mx-2"></i> View</button>
                                    </a>

                                </div>

                            </div>
                        {{-- job-container-end --}}
                       @endforeach

                </div>
            </div>
           </div>
           {{-- latest_job-container-end --}}

        </div>
    </div>
</div>

@endsection
