@extends('layouts.masterSiswa')

@section('header')
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
        rel="stylesheet" />

@stop

@section('content')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                @if (session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{ session('sukses') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="panel panel-profile">
                    <div class="clearfix">
                        <!-- LEFT COLUMN -->
                        <div class="profile-left">
                            <!-- PROFILE HEADER -->
                            <div class="profile-header">
                                <div class="overlay"></div>
                                <div class="profile-main">
                                    <img src="{{ $siswa->getAvatar() }}" class="img-circle" alt="Avatar"
                                        style="width: 120px; height: 120px; object-fit: cover;">
                                    <h3 class="name">{{ $siswa->nama }}</h3>
                                    <span class="online-status status-available">Available</span>
                                </div>
                                <div class="profile-stat">
                                    <div class="row">
                                        <div class="col-md-4 stat-item">
                                            {{ $siswa->mapel->count() }} <span>Mata pelajaran</span>
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            {{ $siswa->avgNilai() }} <span>Rata-rata nilai</span>
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            2174 <span>Points</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE HEADER -->
                            <!-- PROFILE DETAIL -->
                            <div class="profile-detail">
                                <div class="profile-info">
                                    <h4 class="heading">Data diri</h4>
                                    <ul class="list-unstyled list-justify">
                                        <li>Jenis kelamin <span>{{ $siswa->jenis_kelamin }}</span></li>
                                        <li>Agama <span>{{ $siswa->agama }}</span></li>
                                        <li>Alamat <span>{{ $siswa->alamat }}</span></li>
                                    </ul>
                                </div>
                                <div class="text-center"><a href="/siswa/edit/{{ $siswa->id }}"
                                        class="btn btn-warning">Edit Profile</a></div>
                            </div>
                            <!-- END PROFILE DETAIL -->
                        </div>
                        <!-- END LEFT COLUMN -->
                        <!-- RIGHT COLUMN -->
                        <div class="profile-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah nilai
                            </button>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mata pelajaran</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>KODE</th>
                                                <th>NAMA</th>
                                                <th>SEMESTER</th>
                                                <th>NILAI</th>
                                                <th>GURU</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($siswa->mapel as $mapel)
                                                <tr>
                                                    <td>{{ $mapel->kode }}</td>
                                                    <td>{{ $mapel->nama }}</td>
                                                    <td>{{ $mapel->semester }}</td>
                                                    <td><a href="#" class="nilai" data-type="text"
                                                            data-pk="{{ $mapel->id }}"
                                                            data-url="/api/siswa/{{ $siswa->id }}/updatenilai"
                                                            data-title="Masukkan nilai">{{ $mapel->pivot->nilai }}</a>
                                                    </td>
                                                    <td><a
                                                            href="/guru/{{ $mapel->guru_id }}/profile">{{ $mapel->guru->nama }}</a>
                                                    </td>
                                                    <td><a href="/siswa/{{ $siswa->id }}/{{ $mapel->id }}/deletenilai"
                                                            class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel">
                                <div id="chartNilai">

                                </div>
                            </div>
                            <!-- END RIGHT COLUMN -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah nilai</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/siswa/{{ $siswa->id }}/addnilai" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="mapel">Mata pelajaran</label>
                                <select class="form-control" id="mapel" name="mapel">
                                    @foreach ($matapelajaran as $mp)
                                        <option value="{{ $mp->id }}">{{ $mp->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('nilai') ? 'has-error' : '' }}">
                                <label for="InputNilai" class="form-label">Nilai</label>
                                <input name="nilai" type="text" class="form-control" id="InputNilai"
                                    placeholder="Masukkan Nilai" value="{{ old('nilai') }}">
                                @if ($errors->has('nilai'))
                                    <span class="help-block">{{ $errors->first('nilai') }}</span>
                                @endif
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @stop

    @section('footer')
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/highcharts-more.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js">
        </script>

        <script>
            Highcharts.chart('chartNilai', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Laporan nilai siswa',
                    align: 'left'
                },
                xAxis: {
                    categories: {!! json_encode($categories) !!},
                    crosshair: true,
                    accessibility: {
                        description: 'Mata pelajaran'
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Nilai'
                    }
                },
                tooltip: {
                    valueSuffix: ''
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Nilai',
                    data: {!! json_encode($data) !!}
                }, ]
            });

            $(document).ready(function() {
                $('.nilai').editable();
            });
        </script>
    @stop
