@extends('layouts.templates')
@section('content')
    <div class="top-products-area py-3 mt-5 mb-5">
        <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between">
                <h6>Top Products</h6><a class="btn" href="shop-grid.html">View All</a>
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
                                <div class="product-rating">{{ $item->views }}x Dilihat</div>
                                <!-- Add to Cart --><a class="btn btn-success btn-sm"
                                    href="{{ url('https://wa.me/' . $profile->telpon) }}" target="__blank"><i
                                        class="lni lni-phone"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
