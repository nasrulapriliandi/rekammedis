{{-- Add Modal --}}
@foreach($pasiens as $pasien)

    <div class="modal fade" id="edit-{{$pasien->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit pasien</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('pasien.update', $pasien) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama', $pasien->nama) }}">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur Pasien</label>
                            <input type="text" class="form-control" name="umur" value="{{ old('umur', $pasien->umur) }}">
                        </div>
                        <div class="form-group">
                            <label for="umur">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $pasien->alamat) }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Jenis kelamin</label>
                            <input type="text" class="form-control" name="jeniskelamin" value="{{ old('jeniskelamin', $pasien->jeniskelamin) }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- Add Modal --}}
