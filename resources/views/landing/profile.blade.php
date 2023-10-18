@extends('layouts.templates')
@section('content')
    <div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas"
        aria-labelledby="suhaOffcanvasLabel">
        <!-- Close button-->
        <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        <!-- Offcanvas body-->
        <div class="offcanvas-body">
            <!-- Sidenav Profile-->
            <div class="sidenav-profile">
                <div class="user-profile"><img src="img/bg-img/9.jpg" alt=""></div>
                <div class="user-info">
                    <h6 class="user-name mb-1">Suha Sarah</h6>
                    <p class="available-balance">Total balance $<span class="counter">583.67</span></p>
                </div>
            </div>
            <!-- Sidenav Nav-->
            <ul class="sidenav-nav ps-0">
                <li><a href="profile.html"><i class="lni lni-user"></i>My Profile</a></li>
                <li><a href="notifications.html"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span
                            class="ms-3 badge badge-warning">3</span></a></li>
                <li class="suha-dropdown-menu"><a href="#"><i class="lni lni-cart"></i>Shop Pages</a>
                    <ul>
                        <li><a href="shop-grid.html">- Shop Grid</a></li>
                        <li><a href="shop-list.html">- Shop List</a></li>
                        <li><a href="single-product.html">- Product Details</a></li>
                        <li><a href="featured-products.html">- Featured Products</a></li>
                        <li><a href="flash-sale.html">- Flash Sale</a></li>
                    </ul>
                </li>
                <li><a href="pages.html"><i class="lni lni-empty-file"></i>All Pages</a></li>
                <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="lni lni-heart"></i>My Wishlist</a>
                    <ul>
                        <li><a href="wishlist-grid.html">- Wishlist Grid</a></li>
                        <li><a href="wishlist-list.html">- Wishlist List</a></li>
                    </ul>
                </li>
                <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
                <li><a href="intro.html"><i class="lni lni-power-switch"></i>Sign Out</a></li>
            </ul>
        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="container">
            <!-- Profile Wrapper-->
            <div class="profile-wrapper-area py-3">
                <!-- User Information-->
                <div class="card user-info-card">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="user-profile me-3"><img src="{{ asset('landings/img/icons/logo-baroqah.png') }}"
                                alt=""></div>
                        <div class="user-info">
                            <h5 class="mb-0">{{ $profile->nama }}</h5>
                            <p class="mb-0 text-white">+{{ $profile->telpon }}</p>
                        </div>
                    </div>
                </div>
                <!-- User Meta Data-->
                <div class="card user-data-card">
                    <div class="card-body">
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="lni lni-home"></i><span>Nama Lapak</span>
                            </div>
                            <div class="data-content">{{ $profile->nama }}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="lni lni-phone"></i><span>Phone</span>
                            </div>
                            <div class="data-content">+{{ $profile->telpon }}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i
                                    class="lni lni-map-marker"></i><span>Alamat</span></div>
                            <div class="data-content">{{ $profile->alamat }}</div>
                        </div>
                        <!-- Edit Profile-->
                        <div class="edit-profile-btn mt-3"><a href="{{ url('https://wa.me/' . $profile->telpon) }}"
                                target="__blank" class="btn btn-success mt-5 w-100">
                                <i class="lni lni-phone"></i> Hubungi Sekarang
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
