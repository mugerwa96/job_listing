<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    {{--styles_start --}}
    <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/webfonts/all.css')}}">
    {{--styles_end --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light site-bg-color fixed-top">
            <div class="container">
                <a class="navbar-brand  text-light fw-bold" href="{{route('welcome')}}">
                    <i class="fab fa-joomla fa-1x  mx-2"></i> {{ config('app.name', 'Laravel') }}
                 </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=" text-light">|||</span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <!-- Authentication Links -->
                  <li class="nav-item">
                    <a class="nav-link  {{ Request::routeIs('welcome')?'current':'' }}" href="{{ route('welcome') }}"> <i class="fas fa-house-user mx-2"></i>Home</a>
                </li>
                  @guest

                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link {{ Request::routeIs('login')?'current':'' }}" href="{{ route('login') }}"><i class="fas fa-lock-open mx-2"></i>{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link  {{ Request::routeIs('register')?'current':'' }}" href="{{ route('register') }}"> <i class="fas fa-user-lock mx-2"></i>{{ __('Register') }}</a>
                      </li>
                  @endif
              @else


                <li class="nav-item">

                    <a class="nav-link {{ Request::routeIs('all')?'current':'' }}" href="{{ route('all',Auth::id()) }}">
                        <i class="fab fa-joomla mx-2"></i> Listings <span class="badge rounded-pill bg-warning count"></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('create')?'current':'' }}" href="{{ route('create') }}"> <i class="fas fa-plus-circle mx-2"></i>Create Job Listing</a>
                </li>
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          <i class="fas fa-user mx-2"></i>{{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                             <i class="fas fa-power-off"></i> {{ __('Logout') }}
                          </a>


                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest

                </ul>

              </div>
            </div>
          </nav>



        <main class="py-5 mt-5">
            @yield('content')
        </main>
    </div>

    {{-- footer_start --}}
    <section id="footer" class="py-2">
        <div class="container">

            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 text-center ">
                    <hr>
                    <small>copyright &copy; {{ date('Y') }}  &nbsp;{{ Str::lower(config('app.name', 'Laravel') )}}</small><br>
                    <a href="" class="text-dark">
                            <small>follow on</small>
                            <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- footer_end --}}

    {{-- scripts --}}
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/mdb.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    {{-- count function to retrieve all posts by an authnticated user --}}
        <script>
            $(document).ready(function(){
                count();
                function count()
                {
                    $.ajax({
                        url:"{{ route('count') }}",
                        method:"GET",
                        success:function(response)
                        {
                            $('.count').text(response);
                        }
                    })
                }
            })
        </script>
    {{-- count function to retrieve all posts by an authnticated user --}}
</body>
</html>
