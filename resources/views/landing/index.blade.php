@extends('layouts.templates')
@section('content')
    <div class="page-content-wrapper">
        <div class="container">
            <div class="pt-3">
                <!-- Hero Slides-->
                <div class="hero-slides owl-carousel">
                    <!-- Single Hero Slide-->
                    @foreach ($slide as $item)
                        <div class="single-hero-slide" style="background-image: url({{ asset($item->path) }})">
                            <div class="slide-content h-100 d-flex align-items-center">
                                <div class="slide-text">
                                    <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                        data-duration="1000ms">{{ $item->title }}</h4>
                                    <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                        data-duration="1000ms">
                                        {{ $item->subtitle }}</p><a class="btn btn-primary btn-sm"
                                        href="{{ url('https://wa.me/' . $profile->telpon) }}" data-animation="fadeInUp"
                                        data-delay="800ms" data-duration="1000ms">Hubungi Sekarang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Product Catagories -->
        <div class="product-catagories-wrapper py-3">
            <div class="container">
                <div class="section-heading">
                    <h6>Kategori Produk</h6>
                </div>
                <div class="product-catagory-wrap">
                    <div class="row g-3">
                        <!-- Single Catagory Card -->
                        <div class="col-4">
                            <div class="card catagory-card">
                                <div class="card-body"><a class="text-success" href="{{ url('produk/kategori/sapi') }}">
                                        <img src="{{ asset('landings/img/icons/cow.svg') }}" width="28" height="28"
                                            alt=""><span>Sapi</span></a></div>
                            </div>
                        </div>
                        <!-- Single Catagory Card -->
                        <div class="col-4">
                            <div class="card catagory-card">
                                <div class="card-body"><a class="text-danger" href="{{ url('produk/kategori/ayam') }}">
                                        <img src="{{ asset('landings/img/icons/chicken.svg') }}" width="28"
                                            height="28" alt=""><span>Ayam</span></a></div>
                            </div>
                        </div>
                        <!-- Single Catagory Card -->
                        <div class="col-4">
                            <div class="card catagory-card">
                                <div class="card-body"><a class="text-info" href="{{ url('produk/kategori/sayur') }}">
                                        <img src="{{ asset('landings/img/icons/eeg.svg') }}" width="28" height="28"
                                            alt=""><span>Sayur & Telur</span></a></div>
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
                                            src="{{ asset($item->image_produk->path) }}"
                                            style="width: 300px; height: 150px;" alt="">
                                        <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                                    </a>
                                    <!-- Product Title --><a class="product-title d-block"
                                        href="{{ url('produk/' . $item->id) }}">{{ $item->nama }}</a>
                                    <!-- Product Price -->
                                    <p class="sale-price" style="font-size: 13px">Rp.
                                        {{ number_format($item->harga, 0, ',', '.') }}</p>
                                    <!-- Rating -->
                                    <div class="product-rating">
                                        {{ $item->views }}x Dilihat
                                    </div>
                                    <a class="btn btn-success btn-sm" href="{{ url('https://wa.me/' . $profile->telpon) }}"
                                        target="__blank"><i class="lni lni-phone"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
