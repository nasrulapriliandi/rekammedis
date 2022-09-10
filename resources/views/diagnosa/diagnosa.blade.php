@extends('layouts.app')

@section('title', 'diagnosa')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Diagnosa</h1>
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
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penyakit</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($diagnosas as $diagnosa)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $diagnosa->penyakit }}</td>
                                        <td class="d-inline-block text-truncate" style="max-width: 250px;">{{ $diagnosa->keterangan }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-action mr-1" data-target="#edit-diagnosa" data-id="{{ $diagnosa->id }}" data-toggle="modal"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('diagnosa.destroy', $diagnosa) }}" class="d-inline" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
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

@include('diagnosa._tambah_diagnosa')
@include('diagnosa._edit_diagnosa')

<script>
    $(document).on('click','.btn-action',function(){
        var id = $(this).attr('data-id');
        $.get(`/admin/diagnosa/${id}`, function (data) {
            //success data
            $("#edit-form").attr('action', 'http://127.0.0.1:8000/admin/diagnosa/' + id)
            $('#edit-penyakit').val(data.penyakit);
            $('#edit-keterangan').val(data.keterangan);          
        });
    });
</script>
@endsection

