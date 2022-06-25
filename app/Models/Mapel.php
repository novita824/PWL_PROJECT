<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table="mapel";
    public $timestamps= false;
    protected $primaryKey = 'kodehari';

    protected $fillable = [
        'Hari',
        'NamaMapel',
        'GuruPengajar',
    ];
}
