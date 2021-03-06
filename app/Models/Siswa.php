<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table="siswa";
    public $timestamps= false;
    protected $primaryKey = 'Kode';

    protected $fillable = [
        'Kode',
        'Nisn',
        'Nama',
        'TanggalLahir',
        'Alamat',
        'Agama',
        'Jurusan',
        'SppBulan',
    ];
}
