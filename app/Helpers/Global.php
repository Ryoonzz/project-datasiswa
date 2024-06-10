<?php

use App\Models\Guru;
use App\Models\Siswa;

function ranking5besar()
{
    $siswa = Siswa::all();
    $siswa->map(function ($s) {
        $s->avgNilai = $s->avgNilai();
        return $s;
    });
    $siswa = $siswa->sortByDesc('avgNilai')->take(5);
    return $siswa;
}

function totalSiswa()
{
    return Siswa::count();
}

function totalGuru()
{
    return Guru::count();
}

