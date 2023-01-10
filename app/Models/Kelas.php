<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kelas',
        'jurusan_id'
    ];

    public function jurusan()
    {
        return $this->hasOne(Jurusan::class, 'jurusan_id', 'id');
    }

    public function guru()
    {
        return $this->belongsToMany(Guru::class, 'kelas_guru', 'kelas_id', 'guru_id');
    }

    protected $table = "kelas";

}
