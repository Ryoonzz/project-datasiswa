@extends('layouts.master')

@section('content')

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit data siswa</h3>
                            </div>
                            <div class="panel-body">
                                <form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3" {{ $errors->has('nama') ? 'has-error' : '' }}>
                                        <label for="InputNama" class="form-label">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="InputNama" placeholder="Masukkan Nama"
                                            value="{{ $siswa->nama }}">
                                            @if ($errors->has('nama'))
                                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                            @endif
                                    </div> <br>
                    
                                    <div class="mb-3" {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}>
                                        <label for="InputJenisKelamin" class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" id="InputJenisKelamin">
                                            <option selected>Pilih jenis kelamin</option>
                                            <option value="L" @if ($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                                            <option value="P" @if ($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                        </select>
                                        @if ($errors->has('jenis_kelamin'))
                                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                                        @endif
                                    </div> <br>
                    
                                    <div class="mb-3" {{ $errors->has('agama') ? 'has-error' : '' }}>
                                        <label for="InputAgama" class="form-label">Agama</label>
                                        <input name="agama" type="text" class="form-control" id="InputAgama" placeholder="Masukkan Agama"
                                            value="{{ $siswa->agama }}">
                                            @if ($errors->has('agama'))
                                                <span class="text-danger">{{ $errors->first('agama') }}</span>
                                            @endif
                                    </div> <br>
                    
                                    <div class="form-group">
                                        <label for="InputAlamat" class="form-label">Alamat</label>
                                        <textarea name="alamat" class="form-control" placeholder="Alamat lengkap" id="InputAlamat" style="height: 100px">{{ $siswa->alamat }}</textarea>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="InputAvatar" class="form-label">Avatar</label>
                                        <input name="avatar" type="file" class="form-control" id="InputAvatar">
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-warning">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop