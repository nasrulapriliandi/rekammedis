{{-- Add Modal --}}
    <div class="modal fade" id="edit-obat">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Obat</h5>
                </div>

                <div class="modal-body">
                    <form id="edit-form" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="obat">Nama obat</label>
                            <input type="text" id="edit-nama-obat" class="form-control" name="obat">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" id="edit-keterangan" class="form-control" name="keterangan">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- Add Modal --}}
