@extends('layouts.app')
@section('title')
HOME
@endsection

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8 shadow p-4">
                <p class="fw-bold fs-3">Create job listing</p>
                <form class="">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="mb-3">
                              <label for="companyname" class="form-label">Company</label>
                              <input type="text" class="form-control" id="companyname" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="jobtitle" class="form-label">Job Title</label>
                                <input type="email" class="form-control" id="jobtitle" aria-describedby="emailHelp">

                              </div>

                              <div class="mb-3">
                                <label for="salary" class="form-label">Salary</label>
                                <input type="number" class="form-control" id="salary" aria-describedby="emailHelp">
                              </div>
                            <div class="mb-3">
                              <label for="Default select example" class="form-label">Category</label>
                              <select class="form-select" aria-label="Default select example">
                                <option value="">Category</option>
                                <option value="1">Technology</option>
                                <option value="2">Business</option>
                                <option value="3">Retail</option>
                              </select>

                            </div>


                        </div>

                        <div class="col-md-6">


                              <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="email" class="form-control" id="location" aria-describedby="emailHelp">

                              </div>
                              <div class="mb-3">
                                <label for="contactemail" class="form-label">Contact Email</label>
                                <input type="email" class="form-control" id="contactemail" aria-describedby="emailHelp">

                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
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
