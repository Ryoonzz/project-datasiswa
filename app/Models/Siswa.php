<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nama', 'jenis_kelamin', 'agama', 'alamat', 'avatar', 'user_id'];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('images/default.jpg');
        }
        return asset('images/' . $this->avatar);
    }

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot('nilai')->withTimestamps();
    }

    public function avgNilai()
    {
        $total = 0;
        $hitung = 0;
        if ($this->mapel->isNotEmpty()) {
            foreach ($this->mapel as $mapel) {
            $total += $mapel->pivot->nilai;
                $hitung++;
            } 
        }
        return $total != 0 ? round($total/$hitung) : $total;
    }
}
