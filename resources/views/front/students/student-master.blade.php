<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>

    <title>OTMS - @yield('title')</title>

    @include('front.includes.assets.css')

    <style>
        .student-dashboard-menu .nav-item { border-bottom: 1px solid grey;}
        .student-dashboard-menu .nav-item a { color: white;}
        .student-dashboard-menu .nav-item:hover a { color: red}
    </style>
</head>
<body>

<div class="preloader">
    <div class="loader"></div>
</div>


@include('front.includes.header')

<main class="main">

    <div>
        <div class="container">
            <div class="row py-5"  >
                <div class="col-sm-2 " style="background-color: darkorange">
                    <div class="py-2">
                        <ul class="nav flex-column student-dashboard-menu px-0">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('student.dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my-orders') }}">My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('my-courses') }}">My courses</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-10 bg-white">
                    <div class="">
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>

@include('front.includes.footer')


<a href="#" id="scroll-top"><i class="far fa-angle-double-up"></i></a>


@include('front.includes.assets.js')
</body>
</html>
