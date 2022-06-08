<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'golongan_anggota',
        'golongan_anggotab',
        'basis',
        'no_gudep',
        'agama',
        'goldar',
        'alamat',
        'ranting',
        'nta',
        'foto',
    ];
}
