<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    use Hasfactory;
    protected $fillable = [
        'nama',
        'kelas',
        'foto',
        'nik',
        'nisn',
        'alamat',
        'jenis_kelamin',
        'nama_ibu',
        'nama_ayah'
    ];
}
