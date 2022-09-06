@extends('layouts.app')

@section('title', 'Produk')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Produk</h1>
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
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Gambar</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produks as $produk)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $produk->nama }}</td>
                                        {{-- <td>{{ $produk->ukuran }}</td> --}}
                                        <td><img src="{{ asset('storage/' . $produk->gambar) }}" alt="avatar" width="35" class="img-thumbnail"></td>
                                        <td>{{ $produk->harga }}</td>
                                        <td>{{ $produk->deskripsi }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-action mr-1" data-target="#edit-{{$produk->id}}" data-toggle="modal"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('produk.destroy', $produk) }}" class="d-inline" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
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
    </div>
</section>

@include('produk._tambah_produk')
@include('produk._edit_produk')
@endsection

