<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table="mapel";
    public $timestamps= false;
    protected $primaryKey = 'Nama';

    protected $fillable = [
        'Nama',
        'Tugas1',
        'Tugas2',
        'Tugas3',
        'UTS',
        'Tugas4',
        'Tugas5',
        'Tugas6',
        'UAS',
    ];
}
