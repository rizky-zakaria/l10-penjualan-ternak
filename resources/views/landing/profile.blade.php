@extends('layouts.templates')
@section('content')
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
