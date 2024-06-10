@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Siswa</h3>
                                <div class="right">
                                    <a href="/siswa/create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah data
                                        siswa</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Rata-rata Nilai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_siswa as $siswa)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><a href="/siswa/{{ $siswa->id }}/profile">{{ $siswa->nama }}</a>
                                                </td>
                                                <td>{{ $siswa->jenis_kelamin }}</td>
                                                <td>{{ $siswa->agama }}</td>
                                                <td>{{ $siswa->alamat }}</td>
                                                <td>{{ $siswa->avgNilai() }}</td>
                                                <td>
                                                    <a href="/siswa/edit/{{ $siswa->id }}" class="btn btn-warning"><i
                                                            class="fa fa-pencil"></i> Edit</a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        siswa-id="{{ $siswa->id }}"><i class="fa fa-trash"></i>
                                                        Delete</a>
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
        </div>
    </div>

@stop

@section('footer')
    <script>
        $('.delete').click(function() {
            var siswa_id = $(this).attr('siswa-id');
            swal({
                    title: "Yakin ?",
                    text: "Ingin menhapus data siswa dengan id " + siswa_id + " ??",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/siswa/delete/" + siswa_id + "";
                    }
                });
        });
    </script>
@stop
