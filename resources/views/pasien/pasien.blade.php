@extends('layouts.app')

@section('title', 'pasien')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Pasien</h1>
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
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pasiens as $pasien)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $pasien->nama }}</td>
                                        <td>{{ $pasien->umur }}</td>
                                        <td class="d-inline-block text-truncate" style="max-width: 150px;">{{ $pasien->alamat }}</td>
                                        <td>{{ $pasien->jeniskelamin }}</td>
                                        <td>
                                            <a href="{{route('pasien.store')}}" class="btn btn-primary btn-action mr-1" data-target="#edit-pasien" data-toggle="modal"
                                                title="Edit" data-id="{{ $pasien->id }}"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('pasien.destroy', $pasien) }}" class="d-inline" method="POST">
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

@include('pasien._tambah_pasien')
@include('pasien._edit_pasien')

<script>
    $(document).on('click','.btn-action',function(){
        var id = $(this).attr('data-id');
        $.get(`/admin/pasien/${id}`, function (data) {
            //success data
            $("#edit-form").attr('action', 'http://127.0.0.1:8000/admin/pasien/' + id)
            $('#edit-nama').val(data.nama);
            $('#edit-umur').val(data.umur);
            $('#edit-alamat').val(data.alamat); 
            $(`#edit-kelamin option[value=${data.jeniskelamin}]`).attr('selected', 'selected');           
        });
    });
</script>
@endsection

