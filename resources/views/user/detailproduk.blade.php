@extends('layouts.app')

@section('title', 'Detail Produk')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-12">
                <form action="{{route('detail.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <article class="card">
                        <div class="card-header">
                            <img class="img-fluid"
                                src="{{ asset('storage/' . $produks->gambar) }} "> <input type="hidden" name="gambar"  value="{{ old('gambar', $produks->gambar) }}">
                        </div>
                        <div class="card-body">
                            <h1>{{ $produks->harga }} <input type="hidden" name="harga"  value="{{ old('harga', $produks->harga) }}"></h1>
                            <h2>{{ $produks->nama }} <input type="hidden" name="nama"value="{{ old('nama', $produks->nama) }}"></h2>
                            <p>{{ $produks->deskripsi }}</p>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Ukuran</label>
                                        <input type="text" class="form-control" name="ukuran">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="bukti">Upload Bukti Pembayaran</label>
                                    <input type="file" class="form-control" name="bukti">
                                </div>
                            </div>
                            <div class="card-cta">
                                <button type="submit" class="btn btn-primary">Pesan</a>
                            </div>
                        </div>
                    </article>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
