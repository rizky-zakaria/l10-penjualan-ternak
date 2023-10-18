@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Daftar Produk</h1>
@stop

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <form action="{{ route('product.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <button type="submit" class="btn btn-sm btn-primary float-right">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    value="{{ $data->nama }}">
                                @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" id="harga"
                                    class="form-control @error('harga')
                                    is-invalid
                                @enderror"
                                    value="{{ $data->harga }}">
                                @error('harga')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar" id="gambar"
                                    class="form-control @error('gambar')
                                    is-invalid
                                @enderror">
                                @error('gambar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mt-2">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi"
                                    class="my-editor form-control @error('deskripsi')
                                    is-invalid
                                @enderror"
                                    id="my-editor" cols="30" rows="10">
                                    {{ $data->deskripsi }}
                                </textarea>
                                @error('deskripsi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('plugins.Sweetalert2', true)
@section('js')
    <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('my-editor');
    </script>
@endsection
