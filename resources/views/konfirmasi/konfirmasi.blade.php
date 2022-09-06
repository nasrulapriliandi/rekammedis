@extends('layouts.app')

@section('title', 'Konfirmasi Pesanan')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Konfirmasi Pesanan</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-inline mr-auto">
                        <div class="search-element">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                data-width="250">
                        </div>
                    </form>
                    {{-- <div class="card-header-action">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</a>
                    </div> --}}
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    {{-- <th>Nama Pemesan</th> --}}
                                    <th>Nama Barang</th>
                                    <th>Gambar</th>
                                    <th>Ukuran</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Alamat</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($konfirmasis as $konfirmasi)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        {{-- <td>{{ $konfirmasi->user->name }}</td> --}}
                                        <td>{{ $konfirmasi->nama }}</td>
                                        <td><img src="{{ asset('storage/' . $konfirmasi->gambar) }}" alt="avatar" width="35" class="img-thumbnail"></td>
                                        <td>{{ $konfirmasi->ukuran }}</td>
                                        <td>{{ $konfirmasi->bukti }}</td>
                                        <td>{{ $konfirmasi->alamat }}</td>
                                        <td>{{ $konfirmasi->jumlah }}</td>
                                        <td>{{ $konfirmasi->harga }}</td>
                                        <td>
                                            @if ($konfirmasi->status ==1)
                                            {{-- <a href="#" class="badge badge-info" data-toggle="modal" data-target="#edit-{{$konfirmasi->id}}" data-toggle="modal"
                                                title="Edit">Selesai</a> --}}
                                                <small class="badge badge-info">Selesai</small>
                                            @elseif($konfirmasi->status ==2)
                                            <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#edit-{{$konfirmasi->id}}" data-toggle="modal"
                                                title="Edit">Baru</a>
                                        {{-- <small class="badge badge-info" data-toggle="modal" data-target="#exampleModal">Sedang di proses</small> --}}
                                            @endif
                                        </td>

                                            {{-- <a href="#" class="btn btn-primary btn-action mr-1" data-target="#edit-{{$konfirmasi->id}}" data-toggle="modal"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a> --}}
                                            {{-- <form action="{{ route('konfirmasi.destroy', $konfirmasi) }}" class="d-inline" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                                            </form> --}}

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 {{-- @include('konfirmasi._tambah_produk') --}}
@include('konfirmasi.edit')
@endsection

