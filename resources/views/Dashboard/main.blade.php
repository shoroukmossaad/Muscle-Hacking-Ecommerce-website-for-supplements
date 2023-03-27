<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <title>@yield('title')</title>
</head>

<body>

    <nav class="bg-danger">
        <div class="logo w-auto">
            <img src="{{ asset('assets/images/brand1.png') }}" class="w-75" alt="Logo">
        </div>
        {{-- <ul class="nav-links">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul> --}}
        {{-- <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div> --}}
    </nav>
    @yield('content')

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="sidebar-links">
            <li><a href="#">Overview</a></li>
            <li><a href="#">Sales</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="{{ url('dashboard/addproduct') }}">Products</a></li>
            <li><a href="{{ url('dashboard/addcategory') }}">Categories</a></li>
        </ul>
    </div>




    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
Bootstrap 5 Side Navbar
<!--Main Navigation-->
