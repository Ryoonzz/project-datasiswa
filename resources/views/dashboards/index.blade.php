@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Ranking 5 besar</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RANKING</th>
                                            <th>NAMA</th>
                                            <th>NILAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (ranking5besar() as $s)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $s->nama }}</td>
                                                <td>{{ $s->avgNilai }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-user"></i></span>
                            <p>
                                <span class="number">{{ totalSiswa() }}</span>
                                <span class="title">Total siswa</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-user"></i></span>
                            <p>
                                <span class="number">{{ totalGuru() }}</span>
                                <span class="title">Total guru</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
