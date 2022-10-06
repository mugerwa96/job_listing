<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> JOB LISTING </title>
<link rel="stylesheet" href="./assets/css/bootstrap.css">
<link rel="stylesheet" href="./assets/css/mdb.min.css">
<link rel="stylesheet" href="./assets/css/style.css">
{{-- <link rel="stylesheet" href="./assets/webfonts/all.css"> --}}
</head>
<body>
    <section  style="height:90vh" class="py-5">

        <div class="container py-3">
            <div class="row justify-content-center" >
                <div class="col-md-10 ">

                    <p class=" fs-6 text-center">
                        <span class="text-dark fw-bold">JOB TITLE:</span>
                        <span>
                           {{ Str::upper($job->job_title) }}
                        </span>
                        </p>

                    <p>
                        <span class="fw-bold">Category:</span>
                        <span>{{ $job->category }}</span>

                    </p>
                    <p>
                        <span class="fw-bold">Published on:</span>
                        <span>{{ date('D-M-Y',strtotime($job->created_at)) }}</span>

                    </p>

                    <p>
                        <span class="fw-bold">Salary:</span>
                        <span>Ugx: {{ number_format($job->salary) }}</span>

                    </p>
                    <p>
                        <span class="fw-bold">Location:</span>
                        <span>{{ $job->location}}</span>

                    </p>
                    <p>
                        <span class="fw-bold">Company Email:</span>
                        <span>{{ $job->contact_email}}</span>

                    </p>
                <p >
                    <span class="fw-bold">Job Description</span> <br>
                    <span>
                        {{ $job->description }}
                      </span>
                </p>




                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container text-center">

            <small class="fw-bold">Thankz for using Job Listing App</small> <br>
                    <small class="fw-bold">For application development contact +25675189781</small><br>
                    <small class="fw-bold">@Artisan_Pro</small>
        </div>
    </section>

</body>
</html>
