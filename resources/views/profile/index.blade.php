@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Daftar Produk</h1>
@stop

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <form action="{{ route('profile.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <button type="submit" class="btn btn-sm btn-primary float-right">
                            <i class="fas fa-plus-circle"></i> Simpan
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-6">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="{{ $data->nama }}">
                            </div>
                            <div class="col-6">
                                <label for="telpon">Telepon</label>
                                <input type="number" name="telpon" id="telpon" class="form-control"
                                    value="{{ $data->telpon }}">
                            </div>
                            <div class="col-12">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control"
                                    value="{{ $data->alamat }}">
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

@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@section('js')
    <script>
        $("#myTable").DataTable({
            "autoWidth": false,
            "responsive": true
        });
    </script>
@endsection
