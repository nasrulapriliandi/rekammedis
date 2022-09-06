{{-- Add Modal --}}
@foreach($produks as $produk)

    <div class="modal fade" id="edit-{{$produk->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('produk.update', $produk) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama', $produk->nama) }}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" class="form-control" name="ukuran" value="{{ old('ukuran', $produk->ukuran) }}">
                        </div> --}}
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar" value="{{ old('gambar', $produk->gambar) }}">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ old('harga', $produk->harga) }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ old('deskripsi', $produk->deskripsi) }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary float-right">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- Add Modal --}}
