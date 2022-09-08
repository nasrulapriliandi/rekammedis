{{-- Add Modal --}}
@foreach($rekammedis as $r)
    <div class="modal fade" id="edit-{{$r->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Rekam Medis</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('rekammedis.update', $r) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="_id">Nama Pasien</label>
                            <select name="pasien_id" class="form-control">
                                <option value=""> -- Pilih Pasien -- </option>
                                @foreach($pasien as $p)
                                    <option value="{{ $p->id }}" {{ $p->id == $r->pasien_id ? 'selected' : '' }}>{{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="diagnosa_id">Diagnosa</label>
                            <select name="diagnosa_id" class="form-control">
                                <option value=""> -- Pilih Diagnosa -- </option>
                                @foreach($diagnosa as $d)
                                    <option value="{{ $d->id }}" {{ $d->id == $r->diagnosa_id ? 'selected' : '' }}>{{ $d->penyakit }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="obat_id">Obat</label>
                            <select name="obat_id" class="form-control">
                                <option value=""> -- Pilih Obat -- </option>
                                @foreach($obat as $o)
                                    <option value="{{ $o->id }}" {{ $o->id == $r->obat_id ? 'selected' : '' }}>{{ $o->obat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_berobat">Tanggal berobat</label>
                            <input type="date" class="form-control" name="tgl_berobat" value="{{ old('tgl_berobat', $r->tgl_berobat) }}">
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
