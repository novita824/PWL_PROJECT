<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table="guru";
    public $timestamps= false;
    protected $primaryKey = 'Nip';

    protected $fillable = [
        'Nip',
        'Nama',
        'TanggalLahir',
        'JenisKelamin',
        'Pendidikan',
        'MengajarMapel',
        'PasFoto'
    ];
}
