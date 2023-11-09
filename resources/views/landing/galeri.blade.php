@extends('layouts.templates')
@section('content')
    <div class="top-products-area py-3 mt-5 mb-5">
        <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between">
                <h6>Galeri</h6><a class="btn" href="{{ url('galeri') }}">View All</a>
            </div>
            <div class="row g-3">
                @foreach ($data as $item)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card product-card">
                            <div class="card-body">
                                </i></a>
                                {{-- <a class="product-thumbnail d-block" href="{{ url('produk/' . $item->id) }}"> --}}
                                <img class="mb-2" src="{{ asset($item->path) }}" style="width: 300px; height: 150px;"
                                    alt="">
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
