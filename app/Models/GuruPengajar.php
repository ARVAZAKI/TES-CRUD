<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruPengajar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'nama_guru',
        'jurusan_id',
        'kelas_id'
    ];

    public function jurusan()
    {
        return $this->belongsToMany(Jurusan::class, 'jurusan_guru', 'guru_id', 'jurusan_id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_guru', 'kelas_id', 'guru_id');
    }
    protected $table = "guru_pengajar";
}
