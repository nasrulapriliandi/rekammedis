{{-- Add Modal --}}
@foreach($katalogs as $katalog)

    <div class="modal fade" id="edit-{{$katalog->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Katalog</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('katalog.update', $katalog) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama', $katalog->nama) }}">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar" value="{{ old('gambar', $katalog->gambar) }}">
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
