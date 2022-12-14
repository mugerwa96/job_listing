@extends('layouts.app')
@section('title')
HOME
@endsection
@section('content')
<div class="container ">
<div class="row justify-content-center">
    <div class="col-md-8 ">

        {{-- search form-container --}}
                <div class="job-search shadow py-5">
                        <div class="job-search-title">
                            <i class="fab fa-joomla fa-4x site-primary-color"></i>
                                <h1 class="py-2 fw-bold">FIND A JOB</h1>
                                    <form action="{{ route('search') }} "method="POST">
                                       @csrf
                                        <select class="form-select form-select"name="category" aria-label=".form-select-sm example">
                                            <option value="" >Choose a Category</option>
                                            <option value="Technology">Technology</option>
                                            <option value="Business">Business</option>
                                            <option value="Retail">Retail</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary my-3"> <i class="fab fa-searchengin mx-2"></i> FIND NOW </button>
                                    </form>
                        </div>
                </div>
           {{-- search form-container --}}



           {{-- latest_job-container-start --}}

           <div class="latest-job-container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                        <h3 class="fw-bold text-muted mb-5">Latest Jobs  ({{ $jobs->count()}}) </h3>

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
                                        <br>
                                        {{-- @if (Auth::id()==$job->user_id)
                                            <a href="{{ route('destroy',$job->id) }}"class="text-decoration-none">
                                                <span class="badge bg-danger"><i class="fas fa-trash-can mx-1"></i> Delete</span>
                                            </a> &nbsp;
                                            <a href="{{ route('edit',$job->id) }}" class="text-decoration-none">
                                                <span class="badge bg-warning"><i class="fas fa-pen mx-1"></i> Edit</span>
                                            </a>

                                        @endif --}}
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


                {{ $jobs->links("pagination::bootstrap-5") }}
                </div>
            </div>
           </div>
           {{-- latest_job-container-end --}}
    </div>
</div>
</div>
@endsection
