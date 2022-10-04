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
                                <select class="form-select form-select" aria-label=".form-select-sm example">
                                    <option selected>Choose a Category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <button type="button" class="btn btn-primary my-3"> <i class="fab fa-searchengin mx-2"></i> FIND NOW </button>
                        </div>
                </div>
           {{-- search form-container --}}



           {{-- latest_job-container-start --}}

           <div class="latest-job-container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                        <h3 class="fw-bold text-muted mb-5">Latest Jobs  ( 12 ) </h3>

                        @for ($i=0;$i<6;$i++)

                        {{-- job-container-start --}}
                        <div class="job-container my-5">
                                <div class="line "></div>
                                <div class="job-container-all ">

                                    <p class="fw-bold fs-5">Senior Administrator (Brooklyn)</p>

                                    <small class="data">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Fuga dolorum possimus consequatur iure ipsam asperiores esse
                                        nemo adipisci, cupiditate repudiandae reprehender
                                        <a href="">
                                            <small>read more <i class="fas fa-arrow-right-long"></i></small>
                                        </a>
                                        @auth

                                        <br>

                                            <button type="button" class="btn btn-danger btn-sm my-2"><i class="fas fa-trash-can mx-2"></i> </button>
                                            <button type="button" class="btn btn-warning btn-sm my-2"><i class="fas fa-pen-to-square mx-2"></i> </button>
                                        @endauth

                                    </small>
                                    <br>

                                    <small>Category<i class="fa fa-cogs mx-2"></i>:<b> Technology</b></small>
                                        &nbsp;&nbsp;&nbsp;
                                    <small>Published on <i class="fas fa-calendar mx-2"></i>:12-May-2022 </small>
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
                                </div>
                                <div class="job-continaer-view">
                                    <a href="{{ route('show') }}">
                                        <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-eye mx-2"></i> View</button>
                                    </a>
                                </div>

                            </div>
                        {{-- job-container-end --}}
                        @endfor
                </div>
            </div>
           </div>
           {{-- latest_job-container-end --}}
    </div>
</div>
</div>
@endsection
