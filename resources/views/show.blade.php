@extends('layouts.app')
@section('title')
DETAILS
@endsection
@section('content')
<div class="container ">
<div class="row justify-content-center">
    <div class="col-md-8 ">

        {{-- search form-container --}}
                <div class="job-details  py-5">

                    <p class="fw-bold fs-3">Senior Administrator (Brooklyn)</p>
                    <small>
                        <div class="publisher my-2">

                            <div class="author-img">
                                <img src="{{ asset('assets/default_picture.png') }}" alt="">
                            </div>
                            <div class="author-name mx-2">
                                <small>artisan pro</small>
                            </div>
                        </div>

                    </small>
                    <hr>
                    <small class="data fs-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Fuga dolorum possimus consequatur iure ipsam asperiores esse
                        nemo adipisci, cupiditate repudiandae reprehender
                    </small>
                     <br> <br>
                    <small>Category<i class="fa fa-cogs mx-2"></i>:<b> Technology</b></small>
                    &nbsp;&nbsp;&nbsp;
                     <small>Published on <i class="fas fa-calendar mx-2"></i>:12-May-2022 </small>
            <br>
                <small>
                    <ul class="list-group my-4">
                        <li class="list-group-item">
                            <span class="fw-bold">Company</span>:MTN brooklyn
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Salary</span>:Ugx: 900,000
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Company Email</span>:mtnbrookyn@gmail.com
                        </li>

                      </ul>
                      <a href="{{ route('welcome') }}">
                        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-angle-left mx-2"></i> Go Back</button>
                    </a>
                </small>
                </div>
           {{-- search form-container --}}



    </div>
</div>
</div>
@endsection
