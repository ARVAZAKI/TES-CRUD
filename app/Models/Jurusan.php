<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_jurusan'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'jurusan_id', 'id');
    }

    public function guru()
    {
        return $this->belongsToMany(GuruPengajar::class, 'jurusan_guru', 'jurusan_id', 'guru_id');
    }
    protected $table = "jurusan";

}
