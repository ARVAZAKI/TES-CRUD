<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanGuru extends Model
{
    use HasFactory;
    protected $fillable = [
        'jurusan_id',
        'guru_id'
    ];

    protected $table = 'jurusan_guru';
}
