<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Produk;
use App\Models\Profile;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = Produk::orderBy('views', 'desc')
            ->limit(8)
            ->get();
        $profile = Profile::first();
        $slide = Slider::where('status', 'aktif')->get();
        return view('landing.index', compact('data', 'profile', 'slide'));
    }

    public function produk()
    {
        $data = Produk::orderBy('views', 'desc')
            ->get();
        $profile = Profile::first();
        return view('landing.produk', compact('data', 'profile'));
    }

    public function produkKategori($kategori)
    {
        $data = Produk::where('kategori', $kategori)
            ->orderBy('views', 'desc')
            ->get();
        $profile = Profile::first();
        return view('landing.produk', compact('data', 'profile'));
    }

    public function cari(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string'
        ]);

        $profile = Profile::first();
        $data = Produk::where('nama', 'like', '%' . $request->nama . '%')->get();
        return view('landing.produk', compact('data', 'profile'));
    }

    public function produkDetail($id)
    {
        $data = Produk::find($id);
        $data->views = $data->views + 1;
        $data->update();
        $profile = Profile::first();
        return view('landing.detail-produk', compact('data', 'profile'));
    }

    public function profile()
    {
        $profile = Profile::first();
        return view('landing.profile', compact('profile'));
    }

    public function galeri()
    {
        $data = Galeri::orderBy('created_at', 'desc')->get();
        return view('landing.galeri', compact('data'));
    }
}
