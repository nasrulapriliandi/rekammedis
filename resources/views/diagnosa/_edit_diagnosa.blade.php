{{-- Add Modal --}}
@foreach($diagnosas as $diagnosa)

    <div class="modal fade" id="edit-{{$diagnosa->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Diagnosa</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('diagnosa.update', $diagnosa) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="penyakit">Nama Penyakit</label>
                            <input type="text" class="form-control" name="penyakit" value="{{ old('penyakit', $diagnosa->penyakit) }}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ old('keterangan', $diagnosa->keterangan) }}">
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