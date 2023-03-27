@extends('Layouts.Layout_NF')

<script src="{{ asset('assets/js/home.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@section('title')
    Muscle Hacking
@endsection
@section('contant')
    <header class="banner ">
        <div class="backGroundVedio ">
            <div class="container-fluied">

                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <video muted loop id="bg-video" autoplay>
                                <source src=" {{ asset('assets/images/pexels-tima-miroshnichenko-5319855.mp4') }}"
                                    type="video/mp4" />

                            </video>
                        </div>
                        <div class="carousel-item" data-bs-interval="10000">
                            <video muted loop id="bg-video" autoplay>
                                <source src=" {{ asset('assets/images/pexels-ron-lach-7676735.mp4') }}" type="video/mp4" />

                            </video>
                        </div>
                        <div class="carousel-item">
                            <video muted loop id="bg-video" autoplay>
                                <source src=" {{ asset('assets/images/gym-video.mp4') }}" type="video/mp4" />

                            </video>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="video-overlay header-text">
                    <div class="caption">
                        <h2 class='caption-'>WORK SMARTER, GET HARDER.</h2>
                        <a class="Shop-btn" href="#shopnow">

                            <button class="shopNow btn-lg m-3 p-2 rounded -translate-x-1">Shop Now!</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container ">
        <div class="row g-5  my-2 ">
            <div class="col-md-12">
                <h2 class=" Title trending-title">Shop by Category</h2>
            </div>
        </div>



        <div class="row g-5 ">
            @foreach ($categories as $category)
                <div class=" col-md-2 ">
                    <div class="card card-category">

                        <a href="{{ url('shopbycategory', $category->id) }}">
                            <img class="card-img" src="{{ asset("uploads/$category->image") }}">
                        </a>
                        <a class="category-title my-3 text-center" title="Creatine">{{ $category->title }}</a>

                    </div>
                </div>
            @endforeach

        </div>

        <div id="shopnow" class="row g-5  my-2 ">
            <div class="col-md-12">
                <h2 class=' Title trending-title '>Top Sellers</h2>
            </div>

        </div>

        <div class="row g-5">
            @foreach ($products as $product)
                <div class=" col-md-3 ">
                    <a class="container text-center" href="{{ url('/product', $product->id) }}">
                        <div class="card border-0 with-3d-shadow  ">
                            <img class="card-img  text-center" src="{{ asset("uploads/$product->image") }} "
                                alt=" {{ $product->image }}">

                            <div class="card-img-overlay d-flex justify-content-end ">
                                <a href="like" class="card-link  like ">
                                    <i class="fas fa-heart fav d-flex"></i>
                                </a>
                            </div>

                            <div class="card-body text-center ">
                                <h5 class="product-title text-truncate">{{ $product->title }}</h5>

                                <div class="buy d-flex justify-content-between align-items-center">
                                    <div class="price text-success w-100 ">
                                        <h5 class="mt-1 text-center">EGP {{ $product->price }}</h5>
                                    </div>

                                    {{-- <a href="{{url('')}}" class="btn btn-outline-light addToCart mt-3" ><i class="fas fa-shopping-cart"></i> Add to
                                        Cart</a> --}}
                                </div>
                                <form action="{{ route('add_to_cart', $product->id) }}" method="POST">
                                    @csrf

                                    {{-- <i class="fas fa-shopping-cart position-absolute"></i> --}}
                                    <button type="submit" class="w-100 btn addToCart position-relative mt-3">
                                        <i class="fas fa-shopping-cart "></i> ADD TO CART</button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        <div class="row g-5  my-2 ">
            <div class="col-md-12">
                <h2 class=' Title text-center '>Protien & Creatin</h2>
            </div>

        </div>


        <div class="row g-5  my-2 ">
            <div class="col-md-12">
                <h2 class=' Title text-center '>Pre-workout & Boosters</h2>
            </div>

        </div>


        <div class="row g-5  my-2 ">
            <div class="col-md-12">
                <h2 class=' Title text-center '>Fitness Eqipments</h2>
            </div>

        </div>
        {{--
        <a class="  position-sticky" aria-hidden="true" href="#top">


            <svg width="100" height="100">
                <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
              </svg>

        </a> --}}

        <button onclick="topFunction()" id="myBtn" title="Go to top">

            <svg  aria-hidden="true"
                focusable="false" width="0.8em" height=".8em"

                 viewBox="0 0 1024 1280">
                <circle cx="50" cy="50" r="40"  />

                <path
                    d="M1011 1056q0 13-10 23l-50 50q-10 10-23 10t-23-10L512 736l-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23zm0-384q0 13-10 23l-50 50q-10 10-23 10t-23-10L512 352L119 745q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"
                    fill="white"></path>
            </svg>

        </button>

    </div>
    <script>
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
@endsection
