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
                    <form class="form-inline mr-auto">
                        <div class="search-element">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                data-width="250">
                        </div>
                    </form>
                    @if(Auth::user()->level != 'admin')
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</a>
                    </div>
                    @endif
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 text-center">
                            <thead>
                                <tr>
                                    <th>No Rekam Medis</th>
                                    <th>Nama Pasien</th>
                                    <th>Diagnosa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rekammedis as $r)
                                    <tr>
                                        <td>{{ $r->norekammedis }}</td>
                                        <td>{{ $r->pasien->nama }}</td>
                                        <td>{{ $r->diagnosa->penyakit }}</td>
                                        @if(Auth::user()->level != 'admin')
                                        <td>
                                            <a href="{{ route('rekammedis.show', $r->id ) }}" class="btn btn-success btn-action mr-1" title="Detail"><i class="fas fa-info"></i></a>
                                            <a href="#" class="btn btn-primary btn-action mr-1" data-target="#edit-rekam" data-toggle="modal" data-id="{{ $r->id }}"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('rekammedis.destroy', $r) }}" class="d-inline" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                        @else
                                        <td>
                                            <a href="{{ route('admin.rekammedis.detail', $r->id ) }}" class="btn btn-success btn-action mr-1" title="Detail"><i class="fas fa-info"></i></a>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('rekammedis._tambah_rekammedis')
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

