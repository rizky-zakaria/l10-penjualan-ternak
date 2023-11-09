<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Galeri::orderBy('created_at', 'desc')->get();
        return view('galeri.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [
            'gambar' => 'required|mimes:png,jpeg,jpg'
        ];

        $this->validate($request, $rule);

        $image = $request->file('gambar');
        $extension = $image->getClientOriginalExtension();
        $rename = 'IMG' . date('YmdHis') . '.' . $extension;
        $uploadPath = public_path('uploads');
        if (!File::isDirectory($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true, true);
        }


        if ($image->move($uploadPath, $rename)) {
            Galeri::create([
                'path' => "uploads/" . $rename
            ]);
            return redirect(url('admin/galeri'));
        }
        return redirect(url('admin/galeri'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        File::delete($galeri->path);
        $galeri->delete();
        return redirect(url('admin/galeri'));
    }
}
