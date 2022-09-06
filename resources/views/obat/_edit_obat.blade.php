{{-- Add Modal --}}
@foreach($obats as $obat)

    <div class="modal fade" id="edit-{{$obat->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Obat</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('obat.update', $obat) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="obat">Nama obat</label>
                            <input type="text" class="form-control" name="obat" value="{{ old('obat', $obat->obat) }}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ old('keterangan', $obat->keterangan) }}">
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
