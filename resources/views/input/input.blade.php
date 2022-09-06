@extends('layouts.app')

@section('title', 'Input Diagnosa & Obat')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Input Diagnosa & Obat</h1>
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
                                    <th>No Rekam medis</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Nama Pasien</th>
                                    <th>Umur Pasien</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inputs as $input)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $input->rekammedis }}</td>
                                        <td>{{ $input->tanggal }}</td>
                                        <td>{{ $input->nama }}</td>
                                        <td>{{ $input->umur }}</td>
                                        <td>{{ $input->alamat }}</td>
                                        <td>
                                            <a href="{{ route('input.edit', $input) }}" class="badge badge-danger" title="Edit">Input</a>
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
@endsection

