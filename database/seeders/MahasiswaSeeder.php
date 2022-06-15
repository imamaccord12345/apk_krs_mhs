<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'npm' => '2019020200001',
            'nm' => 'imam arifin',
            'jk' => 'laki laki',
            'ttl' => 'pamekasan',
            'alamat' => 'akkor senninan',
            'telp' => '082301392317',
        ];

        Mahasiswa::create($data);
    }
}
