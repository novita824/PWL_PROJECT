<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataGuru extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gurus = [
            [
            'Nip' => '198505282014061001',
            'Nama' => 'Lutfi Anshori, S.Kom',
            'TanggalLahir' => '13 Desember 1996',
            'JenisKelamin' => 'Laki-Laki',
            'Pendidikan' => 'Teknik Informatika',
            'MengajarMapel' => 'Desain dan Video',
            ],
        ];
        DB::table('guru')->insert($gurus);
    }
}
