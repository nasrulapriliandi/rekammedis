{{-- Add Modal --}}
    <div class="modal fade" id="edit-pasien">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit pasien</h5>
                </div>

                <div class="modal-body">
                    <form id="edit-form" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" class="form-control" id="edit-nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur Pasien</label>
                            <input type="text" class="form-control" id="edit-umur" name="umur">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="edit-alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis kelamin</label>
                            <select class="form-control" id="edit-kelamin" name="jeniskelamin">
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
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
