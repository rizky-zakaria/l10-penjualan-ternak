<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Profile;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = Produk::orderBy('views', 'desc')
            ->limit(8)
            ->get();
        $profile = Profile::first();
        return view('landing.index', compact('data', 'profile'));
    }

    public function produk()
    {
        $data = Produk::orderBy('views', 'desc')
            ->get();
        $profile = Profile::first();
        return view('landing.produk', compact('data', 'profile'));
    }

    public function produkDetail($id)
    {
        $data = Produk::find($id);
        $profile = Profile::first();
        return view('landing.detail-produk', compact('data', 'profile'));
    }

    public function profile()
    {
        $profile = Profile::first();
        return view('landing.profile', compact('profile'));
    }
}
