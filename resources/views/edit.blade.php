@extends('layouts.app')
@section('title','EDIT')


@section('content')
    <div class="container ">

        <div class="row justify-content-center">
            <div class="col-md-8 py-2">

                <span>
                    <a href="{{ route('welcome') }}">
                        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-angle-left mx-2"></i> Go Back</button>
                    </a>
                </span>
            </div>
            <div class="col-md-8 shadow mt-2 p-4">
                <p class="fw-bold fs-3 py-2">Edit job listing</p>

                @if(session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                  </div>
                @endif
                <form class="" method="POST" action="{{ route('update',$job->id ) }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">

                            <div class="mb-3">
                              <label for="companyname" class="form-label">Company</label>
                              <input type="text" class="form-control" name="company" required value="{{ $job->company }}"id="companyname" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="jobtitle" class="form-label">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle"required value="{{ $job->job_title }}"name="jobtitle"aria-describedby="emailHelp">

                              </div>

                              <div class="mb-3">
                                <label for="salary" class="form-label">Salary</label>
                                <input type="number" class="form-control" id="salary" required value="{{ $job->salary }}"name="salary" aria-describedby="emailHelp">
                              </div>
                            <div class="mb-3">
                              <label for="Default select example" class="form-label">Category</label>
                              <select class="form-select" aria-label="Default select example" name="category" required>
                                <option value="{{ $job->category }}">{{ $job->category }}</option>
                                <option value="Technology">Technology</option>
                                <option value="Business">Business</option>
                                <option value="Retail">Retail</option>
                              </select>

                            </div>


                        </div>

                        <div class="col-md-6">


                              <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" value="{{ $job->location }}" id="location" required name="location" aria-describedby="emailHelp">

                              </div>
                              <div class="mb-3">
                                <label for="contactemail" class="form-label">Contact Email</label>
                                <input type="email" class="form-control" required value="{{ $job->contact_email }}" name="email" id="contactemail" aria-describedby="emailHelp">

                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" required  name="description"id="exampleFormControlTextarea1" rows="3">{{ $job->description }}</textarea>
                              </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" name="status"class="form-check-input" id="exampleCheck1" {{ $job->status==1?'checked':'' }}>
                              <label class="form-check-label" for="exampleCheck1">Visible</label>
                            </div>

                        </div>
                    </div>
                    <center>

                        <button type="submit" class="btn btn-primary"><i class="fab fa-telegram mx-2"></i>Update</button>
                    </center>
                  </form>
            </div>
        </div>
    </div>
@endsection
