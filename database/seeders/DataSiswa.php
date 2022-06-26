<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswaa = [
            [
            'nisn' => '0184572834',
            'nama' => 'Muhammad Roalfad Syarifuddin',
            'tanggallahir' => '10 Maret 2001',
            'alamat' => 'Kediri',
            'agama' => 'Islam',
            'jurusan' => 'Multimedia',
            'sppbulan' => '250.000',
            ],
        ];
        DB::table('siswa')->insert($siswaa);
    }
}
