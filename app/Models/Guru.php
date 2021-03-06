<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table="guru";
    public $timestamps= false;
    protected $primaryKey = 'Kode';

    protected $fillable = [
        'Kode',
        'Nip',
        'Nama',
        'TanggalLahir',
        'JenisKelamin',
        'Pendidikan',
        'MengajarMapel',
        'PasFoto',
    ];
}
