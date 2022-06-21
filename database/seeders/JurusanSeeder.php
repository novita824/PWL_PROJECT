<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusans = [
            [
            'Kode' => '231',
            'Nama' => 'MM',
            'NamaPanjang' => 'Multimedia',
            'Jurusan' => 'Teknik Komputer dan Informatika',
            'TotalUangGedung' => 'Rp.15000000',
            ],
        ];
        DB::table('jurusan')->insert($jurusans);
    }
}
