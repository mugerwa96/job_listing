@extends('layouts.app')
@section('title')
HOME
@endsection

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8 shadow p-4">
                <p class="fw-bold fs-3">Create job listing</p>

                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                         {{ session('message') }}
                    </div>
                @endif

                <form class="" method="POST" action="{{ route('store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">

                            <div class="mb-3">
                              <label for="companyname" class="form-label">Company</label>
                              <input type="text" class="form-control" required name="company" id="companyname" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="jobtitle" class="form-label">Job Title</label>
                                <input type="text" class="form-control" required id="jobtitle" name="jobtitle"aria-describedby="emailHelp">

                              </div>

                              <div class="mb-3">
                                <label for="salary" class="form-label">Salary</label>
                                <input type="number" class="form-control" required id="salary" name="salary" aria-describedby="emailHelp">
                              </div>
                            <div class="mb-3">
                              <label for="Default select example" class="form-label">Category</label>
                              <select class="form-select" required aria-label="Default select example" name="category">
                                <option value="">Category</option>
                                <option value="Technology">Technology</option>
                                <option value="Business">Business</option>
                                <option value="Retail">Retail</option>
                              </select>

                            </div>


                        </div>

                        <div class="col-md-6">


                              <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" required id="location" name="location" aria-describedby="emailHelp">

                              </div>
                              <div class="mb-3">
                                <label for="contactemail" class="form-label">Contact Email</label>
                                <input type="email" class="form-control" required name="email" id="contactemail" aria-describedby="emailHelp">

                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" required name="description"id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" name="status"class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Visible</label>
                            </div>

                        </div>
                    </div>
                    <center>

                        <button type="submit" class="btn btn-primary"><i class="fab fa-telegram mx-2"></i>POST</button>
                    </center>
                  </form>
            </div>
        </div>
    </div>
@endsection
