{{-- Add Modal --}}
@foreach($konfirmasis as $konfirmasi)

    <div class="modal fade" id="edit-{{$konfirmasi->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('konfirmasi.update', $konfirmasi->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" id="">
                              <option value="">Pilihan</option>
                              <option value="1">Selesai</option>
                              <option value="2">Belum di proses</option>
                          </select>
                        </div>
                        <div class="float-right">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- Add Modal --}}
