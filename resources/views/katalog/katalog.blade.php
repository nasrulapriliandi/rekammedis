@extends('layouts.app')

@section('title', 'Katalog')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Katalog</h1>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($katalogs as $katalog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $katalog->nama }}</td>
                                        <td><img src="{{ asset('storage/' . $katalog->gambar) }}" alt="avatar" width="35" class="img-thumbnail"></td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-action mr-1" data-target="#edit-{{$katalog->id}}" data-toggle="modal"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('katalog.destroy', $katalog) }}" class="d-inline" method="POST">
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

@include('katalog._tambah_katalog')
@include('katalog._edit_katalog')
@endsection

