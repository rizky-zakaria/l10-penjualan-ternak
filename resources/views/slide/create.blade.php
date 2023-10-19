@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Daftar Produk</h1>
@stop

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <form action="{{ route('slide.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <button type="submit" class="btn btn-sm btn-primary float-right">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <label for="title">Judul</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title')
                                    is-invalid
                                @enderror">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="subtitle">Sub Judul</label>
                                <input type="text" name="subtitle" id="subtitle"
                                    class="form-control @error('subtitle')
                                    is-invalid
                                @enderror">
                                @error('subtitle')
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
