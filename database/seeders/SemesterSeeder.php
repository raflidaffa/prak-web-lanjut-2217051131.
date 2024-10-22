<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',

        ];

        foreach ($data as $semester){
            Semester::create([
                'nama_semester' => $semester,
            ]);
        }
    }
}
