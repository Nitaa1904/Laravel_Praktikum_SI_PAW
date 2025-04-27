<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'jenis_kelamin',
        'agama',
        'tgl_lahir',
        'alamat',
    ];
}