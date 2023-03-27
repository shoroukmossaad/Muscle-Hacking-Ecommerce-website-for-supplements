@section('contant')
    <div class="container">
        <div class="row g-5  my-2 ">
            @foreach ($products as $product)
            <a id='rowProducts' class="col-md-3 text-center  " href="{{ url("products" ,$product->id) }}">
                <div class="card product-card rounded">
                    <div class='bg-dark ' id='imgP '>
                        <img src="{{ asset('assets/images/Muscletech_Nitrotech.png') }} " class="  w-75 card-img-top bg-dark"
                            alt="" />
                    </div>
                    <div class="card-body">

                        <h5 class="product-title">
                            {{$product->title}}
                        </h5>
                        <h5 class="product-price">
                            {{$product->price}} <span class='EGP'>EGP</span>
                        </h5>
                        {{-- {/* <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> */} --}}
                        <div class="card-icons d-flex ">
                            <button class='fav w-100 d-flex justifiy-content-between'> <i
                                    class="fa-regular fa-heart favv"></i> </button>
                            <button class='share d-flex justifiy-content-between'><i
                                    class=" fa-regular fa-share-from-square"></i></button>
                        </div>
                    </div>
                </div>
            </a>

            @endforeach
        </div>
    </div>
    </div>

@endsection
