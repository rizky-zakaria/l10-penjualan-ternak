<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slider::orderBy('created_at', 'desc')->get();
        return view('slide.index', compact('data'));
    }

    public function status($id)
    {
        $data = Slider::find($id);
        if ($data->status == 'aktif') {
            $data->status = 'non-aktif';
        } else {
            $data->status = 'aktif';
        }
        $data->update();
        return redirect(route('slide.index'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slide.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'gambar' => 'required'
        ]);

        $image = $request->file('gambar');
        $extension = $image->getClientOriginalExtension();
        $rename = 'IMG' . date('YmdHis') . '.' . $extension;
        $uploadPath = public_path('uploads');
        if (!File::isDirectory($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true, true);
        }


        if ($image->move($uploadPath, $rename)) {
            Slider::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'path' => "uploads/" . $rename,
                'status' => 'non-aktif'
            ]);

            // toast('Berhasil menambahkan data!', 'success');
            return redirect(url('admin/slide'));
        }

        // toast('Gagal menambahkan data!', 'success');
        return redirect(url('admin/slide'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Slider::find($id);
        return view('slide.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'gambar' => 'required'
        ]);

        if ($request->has('gambar')) {
            $image = $request->file('gambar');
            $extension = $image->getClientOriginalExtension();
            $rename = 'IMG' . date('YmdHis') . '.' . $extension;
            $uploadPath = public_path('uploads');
            if (!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true, true);
            }


            if ($image->move($uploadPath, $rename)) {

                $produk = Slider::find($id);
                $produk->title = $request->title;
                $produk->subtitle = $request->subtitle;
                $produk->path = "uploads/" . $rename;
                $produk->update();

                return redirect(url('admin/slide'));
            }
        } else {
            $produk = Slider::find($id);
            $produk->title = $request->title;
            $produk->subtitle = $request->subtitle;
            $produk->update();
            return redirect(url('admin/slide'));
        }
        return redirect(url('admin/slide'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Slider::find($id);
        $data->delete();
        return redirect(url('admin/slide'));
    }
}
