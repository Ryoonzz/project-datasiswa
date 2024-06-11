@extends('layouts.masterSiswa')

@section('content')

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tambah data siswa</h3>
                            </div>
                            <div class="panel-body">
                                <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 {{ $errors->has('nama') ? 'has-error' : '' }}">
                                        <label for="InputNama" class="form-label">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="InputNama"
                                            placeholder="Masukkan Nama" value="{{ old('nama') }}">
                                        @if ($errors->has('nama'))
                                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                                        @endif
                                    </div> <br>

                                    <div class="mb-3" {{ $errors->has('email') ? 'has-error' : '' }}>
                                        <label for="InputEmail" class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control" id="InputEmail"
                                            placeholder="Masukkan Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div> <br>

                                    <div class="mb-3" {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}>
                                        <label for="InputJenisKelamin" class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" id="InputJenisKelamin">
                                            <option selected>Pilih jenis kelamin</option>
                                            <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>
                                                Laki-laki</option>
                                            <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>
                                                Perempuan</option>
                                        </select>
                                        @if ($errors->has('jenis_kelamin'))
                                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                                        @endif
                                    </div> <br>

                                    <div class="mb-3" {{ $errors->has('agama') ? 'has-error' : '' }}>
                                        <label for="InputAgama" class="form-label">Agama</label>
                                        <input name="agama" type="text" class="form-control" id="InputAgama"
                                            placeholder="Masukkan Agama" value="{{ old('agama') }}">
                                        @if ($errors->has('agama'))
                                            <span class="text-danger">{{ $errors->first('agama') }}</span>
                                        @endif
                                    </div> <br>

                                    <div class="form-group">
                                        <label for="InputAlamat" class="form-label">Alamat</label>
                                        <textarea name="alamat" class="form-control" placeholder="Alamat lengkap" id="InputAlamat" style="height: 100px">{{ old('alamat') }}</textarea>
                                    </div>
                                    <br>

                                    <div class="form-group" {{ $errors->has('avatar') ? 'has-error' : '' }}>
                                        <label for="InputAvatar" class="form-label">Avatar</label>
                                        <input name="avatar" type="file" class="form-control" id="InputAvatar">
                                        @if ($errors->has('avatar'))
                                            <span class="text-danger">{{ $errors->first('avatar') }}</span>
                                        @endif
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary">Tambah data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('content1')
    <h1>Edit Data Siswa</h1>
    <hr>
    @if (session('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
@endsection
