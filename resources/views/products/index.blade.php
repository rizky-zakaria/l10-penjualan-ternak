@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Daftar Produk</h1>
@stop

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus-circle"></i> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td><img src="{{ asset($item->image_produk->path) }}" alt="" width="100">
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('product.edit', $item->id) }}"
                                            class="btn btn-success btn-sm m-1"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('product.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger m-1"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
