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
                    <a href="{{ route('slide.create') }}" class="btn btn-sm btn-primary float-right">
                        <i class="fas fa-plus-circle"></i> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Sub Judul</th>
                                <th>Status</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->subtitle }}</td>
                                    <td>
                                        @if ($item->status === 'aktif')
                                            <span class="badge badge-success">
                                                Aktif
                                            </span>
                                        @else
                                            <span class="badge badge-danger">
                                                Tidak Aktif
                                            </span>
                                        @endif
                                    </td>
                                    <td><img src="{{ asset($item->path) }}" alt="" width="100">
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('slide.edit', $item->id) }}" class="btn btn-success btn-sm m-1"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ route('slide.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger m-1"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                        <a href="{{ route('slide.aktif', $item->id) }}"
                                            class="btn btn-warning btn-sm m-1"><i class="fas fa-power-off"></i></a>
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
