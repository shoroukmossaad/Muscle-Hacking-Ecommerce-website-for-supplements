{{-- {{dd($carts)}} --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar_nf.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
</head>

<body>

    <nav id='allnav' class="navbar-collapse navbar bg-light shadow navbar-dark navbar-expand-lg   fixed-top  ">
        <div class="container w-100 justify-content-evenly">

            {{-- {/* <!-- //Brand Logo --> */} --}}
            <a id="navbar-brand" class="mt-0 pt-0" href="/">MUSCLE HACKING <img src="/images/"
                    alt="" /></a>

            {{-- {/* <!-- //menu for responsive --> */} --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="menu">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse  justify-content-end" id="navbarScroll">

                <ul class="navbar-nav  d-flex  justify-content-between">


                    <li id='nav-item' class="nav-item">
                        <a id='home' class="nav-link" aria-current="page" href="">Home</a>
                    </li>

                    <li id='nav-item' class="nav-item">
                        <a class=" about nav-link" href="about">About</a>
                    </li>

                    <div class="dropdown">
                        <span class=" shop-nav nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Shop
                        </span>

                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item bg-dark" href="">Pre-workout</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item bg-dark" href="">Protien&ceritain</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li><a class="dropdown-item bg-dark" href="">Fittness equipment</a></li>
                    </div>

                    <li class="nav-item  w-50">


                        {{-- {/* <SearchBar/> */} --}}
                        <form class="w-100 mt-2 position-relative shadow-lg rounded" action="{{ url('/search') }}"
                            method="GET" role="search">
                            @csrf
                            <input id='searchBar' class="form-control border-2" type="search"
                                name="query"placeholder="Search products" pattern='text-center'
                                aria-label="Search text" inputMode='undefined' />
                            <i type="submit" class=" search-icon fa-solid fa-magnifying-glass me-2"></i>
                        </form>
                    </li>

                </ul>

                <ul class="list-unstyled d-flex mx-5 justify-content-between align-items-center my-0">
                    <div class="dropdown px-3 mx-5">
                        <span class="nav-link drop-hover " role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <a class=" person-dropbtn fs-4 nav-link  fa-regular fa-circle-user" href="#"></a>
                        </span>

                        <ul class="person  dropdown-menu bg-dark">
                            @if (!Auth::user())
                                <li><a class="dropdown-item bg-dark" href="login">Login</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>

                                <li><a class="dropdown-item bg-dark" href="register">Register</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                            @endif
                            @if (Auth::user())
                                <li><a class="dropdown-item bg-dark" href="myaccount">My Account</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item bg-dark" href="{{ url('/logout') }}">Log Out</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                            @endif
                            <li><a class="dropdown-item bg-dark" href="mywishlist">My Wishlist</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li><a class="dropdown-item bg-dark" href="{{ url('orderhistory') }}">My Orders</a></li>
                        </ul>
                    </div>




                    <div class="dropdown mt-2 ">
                        <span class="nav-link " role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a class=" cart-dropbtn fs-4 nav-link " href="#">

                                {{-- <i class="fa-solid fa-cart-shopping position-relative">
                                    <span class="cart-number rounded-1  ">
                                        @if (Auth::user())
                                            {{ count((array) session('cart')) }}
                                        @endif
                                        @if (!Auth::user())
                                            0
                                        @endif
                                    </span>
                                </i> --}}



                                <div class="cart-icon">
                                    <span class="cart-count">

                                        @if (Auth::user())
                                            <strong> {{ count((array) session('cart')) }}</strong>
                                        @endif
                                        @if (!Auth::user())
                                            <strong>0</strong>
                                        @endif
                                    </span>
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-shopping-cart"> --}}
                                    <i class="fa-solid fa-cart-shopping ">

                                        {{-- <circle cx="1" cy="21" r="1"></circle>
                                      <circle cx="2" cy="21" r="1"></circle> --}}

                                    </i>
                                    {{-- </svg> --}}
                                </div>
                            </a>

                        </span>

                        <ul class=" cart dropdown-menu scrollable-menu bg-dark" role="menu">
                            @if (!Auth::user())
                                <li><span class='emptycard-text text-center '>Empty cart!</span></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                            @endif
                            @if (Auth::user())
                                {{ $count = 0 }}
                                @php $total_price=0 @endphp
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $detalis)
                                        @php $total_price+=$detalis['price']* $detalis['quantity'] @endphp
                                    @endforeach

                                    @foreach (session('cart') as $id => $detalis)
                                        <li><a class="dropdown-item  bg-dark d-flex ">
                                                product{{ $detalis['product_name'] }}{{ $total_price }}
                                            </a>

                                            <a class="btn btn-danger " href="{{ url('removefromcart', $id) }}"
                                                type="submit"> delete
                                                <i class="fa-solid fa-trash d-flex " style="color: white"></i></a>
                                        </li>

                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        {{ $count++ }}
                                    @endforeach
                                @endif


                                @if ($count == 0)
                                    <li><span class='emptycard-text text-center '>Empty cart!</span></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                @endif
                            @endif

                            <li><a class="dropdown-item bg-dark" href="{{ url('/cart') }}">View your Cart</a></li>

                        </ul>
                    </div>



                </ul>



            </div>
        </div>
    </nav>


    @yield('contant')


    <footer>
        <div class="container-fluied bg-dark">

            <div class="container-fluied-footer">
                <div class="container">
                    <div class="row  ">
                        <div class="col-md-5  col-xs-6 me-5 pe-5 mt-5 align-baseline">
                            <div class='brand-about my-3 '>MUSCLE HACKER </div>
                            <p class='text-color'> Max Muscle® is the major player in the supplements field and we are
                                proud to be the number one supplement store in Egypt. We are proud that we are the first
                                supplement provider in Egypt since 2009, many stores all over Egypt & we are growing
                                daily...</p>

                        </div>


                        <div class="col-md-3 col-xs-12  mt-5 ">
                            <h6>Policies Links</h6>
                            <ul class="footer-list list-unstyled d-block pt-2">
                                <li class='about-list mb-2'>
                                    <a href="">Refund Policy</a>
                                </li>
                                <li class='about-list mb-2'>
                                    <a href=""> Security</a>
                                </li>
                                <li class='about-list mb-2 d-block'>
                                    <a href=""> Terms & Condition</a>
                                </li>
                                <li class='about-list '>
                                    <a href=""> Terms & Condition</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-3 col-xs-12  mt-5 ">
                            <h6>Contact Us</h6>
                            <ul class="footer-list list-unstyled d-block pt-2">
                                <li class='about-list mb-2'>
                                    <a class='company-phone'>Call 9999</a>
                                </li>
                                <li class='about-list mb-2'>
                                    <a href=""> Send Us </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container-fluied bg-black">
                <div class="container my-0">
                    <div class="row my-0">
                        <div class="col-md-12 my-0">
                            <p class="">
                                &copy 2023 Muscle Hacking. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </footer>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
