<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            [
                'nama' => 'Akmal',
                'npm' => '1234',
                'kelas_id' => 1,
                'jurusan' => 'Informatika',
                'semester' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rafli Daffa Pratama',
                'npm' => '987654321',
                'kelas_id' => 2,
                'jurusan' => 'Sistem Informasi',
                'semester' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
