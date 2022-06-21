<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table="jurusan";
    public $timestamps= false;
    protected $primaryKey = 'Kode';

    protected $fillable = [
        'Kode',
        'Nama',
        'NamaPanjang',
        'Jurusan',
        'TotalUangGedung',
    ];
}
