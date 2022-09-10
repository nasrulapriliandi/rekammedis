@extends('layouts.app')

@section('title', 'obat')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Obat</h1>
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
                                    <th>Nama Obat</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($obats as $obat)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $obat->obat }}</td>
                                        <td class="d-inline-block text-truncate" style="max-width: 250px;">{{ $obat->keterangan }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-action mr-1" data-target="#edit-obat" data-id="{{ $obat->id }}" data-toggle="modal"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('obat.destroy', $obat) }}" class="d-inline" method="POST">
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

@include('obat._tambah_obat')
@include('obat._edit_obat')

<script>
    $(document).on('click','.btn-action',function(){
        var id = $(this).attr('data-id');
        $.get(`/admin/obat/${id}`, function (data) {
            //success data
            $("#edit-form").attr('action', 'http://127.0.0.1:8000/admin/obat/' + id)
            $('#edit-nama-obat').val(data.obat);
            $('#edit-keterangan').val(data.keterangan);     
        });
    });
</script>
@endsection

