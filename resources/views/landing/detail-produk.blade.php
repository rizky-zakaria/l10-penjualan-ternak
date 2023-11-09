@extends('layouts.templates')
@section('content')
    <div class="page-content-wrapper">
        <div class="product-slide-wrapper">
            <!-- Product Slides-->
            <div class="product-slides owl-carousel">
                <!-- Single Hero Slide-->
                <div class="single-product-slide" style="background-image: url('{{ asset($data->image_produk->path) }}')">
                </div>
            </div>
        </div>
        <div class="product-description pb-3">
            <!-- Product Specification-->
            <div class="p-specification bg-white mb-3 py-3">
                <div class="container">
                    <h3 class="mb-2">
                        {{ $data->nama }}
                    </h3>
                    <h5 class="mb-2">
                        {{-- {{ number_format($data->harga, 0, ',', '.') }} --}}
                        {{ $data->harga }}
                    </h5>
                    <h6>Deskripsi :</h6>
                    <p class="mb-0" style="text-align: justify">
                        {!! $data->deskripsi !!}
                    </p>
                    <a href="{{ url('https://wa.me/' . $profile->telpon) }}" target="__blank"
                        class="btn btn-success mt-5 w-100">
                        <i class="lni lni-phone"></i> Hubungi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
