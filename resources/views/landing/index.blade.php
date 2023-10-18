@extends('layouts.templates')
@section('content')
    <div class="page-content-wrapper">
        <div class="container">
            <div class="pt-3">
                <!-- Hero Slides-->
                <div class="hero-slides owl-carousel">
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide" style="background-image: url({{ asset('landings/img/bg-img/1.jpg') }})">
                        <div class="slide-content h-100 d-flex align-items-center">
                            <div class="slide-text">
                                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                    data-duration="1000ms">Amazon Echo</h4>
                                <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">
                                    3rd Generation, Charcoal</p><a class="btn btn-primary btn-sm" href="#"
                                    data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide" style="background-image: url({{ asset('landings/img/bg-img/2.jpg') }})">
                        <div class="slide-content h-100 d-flex align-items-center">
                            <div class="slide-text">
                                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                    data-duration="1000ms">Light Candle</h4>
                                <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">
                                    Now only $22</p><a class="btn btn-success btn-sm" href="#"
                                    data-animation="fadeInUp" data-delay="500ms" data-duration="1000ms">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide" style="background-image: url({{ asset('landings/img/bg-img/3.jpg') }})">
                        <div class="slide-content h-100 d-flex align-items-center">
                            <div class="slide-text">
                                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                    data-duration="1000ms">Best Furniture</h4>
                                <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">3
                                    years warranty</p><a class="btn btn-danger btn-sm" href="#"
                                    data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Catagories -->
        <div class="product-catagories-wrapper py-3">
            <div class="container">
                <div class="section-heading">
                    <h6>Product Categories</h6>
                </div>
                <div class="product-catagory-wrap">
                    <div class="row g-3">
                        <!-- Single Catagory Card -->
                        <div class="col-4">
                            <div class="card catagory-card">
                                <div class="card-body"><a class="text-success" href="catagory.html">
                                        <img src="{{ asset('landings/img/icons/cow.svg') }}" width="28" height="28"
                                            alt=""><span>Sapi Ternak</span></a></div>
                            </div>
                        </div>
                        <!-- Single Catagory Card -->
                        <div class="col-4">
                            <div class="card catagory-card">
                                <div class="card-body"><a class="text-danger" href="catagory.html">
                                        <img src="{{ asset('landings/img/icons/goat.svg') }}" width="28" height="28"
                                            alt=""><span>Kambing Ternak</span></a></div>
                            </div>
                        </div>
                        <!-- Single Catagory Card -->
                        <div class="col-4">
                            <div class="card catagory-card">
                                <div class="card-body"><a class="text-info" href="catagory.html">
                                        <img src="{{ asset('landings/img/icons/chicken.svg') }}" width="28"
                                            height="28" alt=""><span>Ayam Ternak</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Products -->
        <div class="top-products-area py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between">
                    <h6>Terpopuler</h6><a class="btn" href="{{ url('produk') }}">View All</a>
                </div>
                <div class="row g-3">
                    @foreach ($data as $item)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card product-card">
                                <div class="card-body">
                                    </i></a>
                                    <!-- Thumbnail --><a class="product-thumbnail d-block"
                                        href="{{ url('produk/' . $item->id) }}"><img class="mb-2"
                                            src="{{ asset($item->image_produk->path) }}" alt="">
                                        <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                                    </a>
                                    <!-- Product Title --><a class="product-title d-block"
                                        href="single-product.html">{{ $item->nama }}</a>
                                    <!-- Product Price -->
                                    <p class="sale-price">Rp. {{ number_format($item->harga, 0, ',', '.') }}</p>
                                    <!-- Rating -->
                                    <div class="product-rating">
                                        {{ $item->views }}x Dilihat
                                    </div>
                                    <!-- Add to Cart --><a class="btn btn-success btn-sm"
                                        href="{{ url('https://wa.me/' . $profile->telepon) }}" target="__blank"><i
                                            class="lni lni-phone"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
