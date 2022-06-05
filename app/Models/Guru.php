<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table="guru";
    public $timestamps= false;
    protected $primaryKey = 'nip';

    protected $fillable = [
        'nip',
        'Nama',
        'Tanggal Lahir',
        'Jenis Kelamin',
        'Pendidikan',
        'Mengajar Mapel',
    ];
}
