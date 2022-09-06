@extends('layouts.app')

@section('title', 'Input Diagnosa')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Input Diagnosa</h1>
    </div>

    <div class="section-body">
        <div class="row">
            {{-- {{ dd($inputs) }} --}}
            <div class="col-12 col-sm-6 col-md-6 col-lg-12">
                <div class="card">
                    <form action="{{ route('input.update', $pasien) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>No Rekam medis</label>
                                        <input type="text" disabled class="form-control" name="rekammedis"
                                            value="{{ old('rekammedis', $pasien->rekammedis) }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" disabled class="form-control" name="tanggal"
                                            value="{{ old('tanggal', $pasien->tanggal) }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nama Pasien</label>
                                        <input type="text" disabled class="form-control" name="nama"
                                            value="{{ old('nama', $pasien->nama) }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Umur Pasien</label>
                                        <input type="text" disabled class="form-control" name="umur"
                                            value="{{ old('umur', $pasien->umur) }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" disabled class="form-control" name="alamat"
                                            value="{{ old('alamat', $pasien->alamat) }}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h5>Masukan Hasil Pemeriksaan</h5>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nama Diagnosa</label>
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>  
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nama Obat</label>
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Keterangan Diagnosa</label>
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Keterangan Obat</label>
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>

                            </div>
                            <div class="card-cta">
                                <button type="submit" class="btn btn-primary">Simpan</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
