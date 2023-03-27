@extends('Layouts.Layout_NF')

<script src="{{ asset('assets/js/home.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@section('title')
    Protien|Category
@endsection
@section('contant')
    <div class="container py-3">
        <div class="row g-5  my-2 ">
            <div class="col-md-12">
                <h2 class=' Title trending-title '>Protein</h2>
            </div>

        </div>

        <div class="row">
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
                                    <button type="submit"
                                        class="w-100 btn btn-outline-light addToCart position-relative mt-3">
                                        <i class="fas fa-shopping-cart "></i> Add to cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
