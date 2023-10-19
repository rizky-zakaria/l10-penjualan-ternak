<?php

namespace App\Http\Controllers;

use App\Models\ImageProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::orderBy('created_at', 'desc')->get();
        return view('products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|integer',
            'gambar' => 'required|max:10000',
            'kategori' => 'required'
        ]);

        $image = $request->file('gambar');
        $extension = $image->getClientOriginalExtension();
        $rename = 'IMG' . date('YmdHis') . '.' . $extension;
        $uploadPath = public_path('uploads');
        if (!File::isDirectory($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true, true);
        }


        if ($image->move($uploadPath, $rename)) {
            $produk = Produk::create([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'views' => 0,
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori
            ]);

            ImageProduk::Create([
                'image' => $rename,
                'produk_id' => $produk->id,
                'path' => "uploads/" . $rename
            ]);
            // toast('Berhasil menambahkan data!', 'success');
            return redirect(url('admin/product'));
        }

        // toast('Gagal menambahkan data!', 'success');
        return redirect(url('admin/product'));
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
        $data = Produk::find($id);
        return view('products.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|integer',
            'gambar' => 'max:10000',
            'kategori' => 'required'
        ]);

        $produk = Produk::find($id);
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori = $request->kategori;
        $produk->update();

        if ($request->has('gambar')) {
            $image = $request->file('gambar');
            $extension = $image->getClientOriginalExtension();
            $rename = 'IMG' . date('YmdHis') . '.' . $extension;
            $uploadPath = public_path('uploads');
            if (!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true, true);
            }


            if ($image->move($uploadPath, $rename)) {

                $image = ImageProduk::where('produk_id', $id)->first();
                $image->image = $rename;
                $image->path = "uploads/" . $rename;
                $image->update();
                return redirect(url('admin/product'));
            }
        }
        return redirect(url('admin/product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Produk::find($id);
        $data->delete();
        return redirect(url('admin/product'));
    }
}
