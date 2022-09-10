@extends('layouts.app')

@section('title', 'Rekam Medis')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Hasil Rekam medis</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $rekam->norekammedis }}</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $rekam->pasien->nama }}</td>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <td>{{ $rekam->pasien->umur }} Tahun</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $rekam->pasien->jeniskelamin }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $rekam->pasien->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Diagnosa</th>
                                <td>{{ $rekam->diagnosa->penyakit }}</td>
                            </tr>
                            <tr>
                                <th>Detail diagnosa</th>
                                <td>{{ $rekam->diagnosa->keterangan }}</td>
                            </tr>
                            <tr>
                                <th>Obat</th>
                                <td>{{ $rekam->obat->obat }}</td>
                            </tr>
                            <tr>
                                <th>Detail obat</th>
                                <td>{{ $rekam->obat->keterangan }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal berobat</th>
                                <td>{{ $rekam->tgl_berobat }}</td>
                            </tr>
                        </tbody>
                        </table>
                    @if(Auth::user()->level != 'admin')
                    <a href="{{ route('rekammedis.index') }}" class="btn btn-light"><i class="fas fa-angle-left"></i></a>
                    <a href="#" class="btn btn-primary btn-action mr-1" data-target="#edit-rekam" data-toggle="modal" data-id="{{ $rekam->id }}"
                        title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('rekammedis.destroy', $rekam->id) }}" class="d-inline" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                        </form>
                    @else
                    <a href="{{ route('admin.rekammedis') }}" class="btn btn-light"><i class="fas fa-angle-left"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@include('rekammedis._edit_rekammedis')

<script>
    $(document).on('click','.btn-action',function(){
        var id = $(this).attr('data-id');
        $.get(`/dokter/rekammedis/${id}/edit`, function (data) {
            //success data
            $("#edit-form").attr('action', 'http://127.0.0.1:8000/dokter/rekammedis/' + id)
            $('#edit-norekmedis').val(data.norekammedis);
            $(`#edit-pasien option[value=${data.pasien_id}]`).attr('selected', 'selected');
            $(`#edit-diagnosa option[value=${data.diagnosa_id}]`).attr('selected', 'selected');
            $(`#edit-obat option[value=${data.obat_id}]`).attr('selected', 'selected');
            $('#edit-tgl').val(data.tgl_berobat);
        });
    });
</script>
@endsection

