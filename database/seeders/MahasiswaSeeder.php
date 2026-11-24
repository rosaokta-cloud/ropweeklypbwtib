<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //query builder untuk insert data ke table mahasiswas = pakainya DB::table('mahasiswas')->insert()
            DB::table('mahasiswas')->upsert(
                [
                    [
                        'nim' => 12309876543,
                        'nama' => 'Rose',
                        'email' => 'roses@example.com',
                        'foto' => 'path/to/foto.jpg',
                        'nohp' => 628123456789,
                        'prodi' => 'Teknologi Informasi',
                    ],
                ],
                ['nim'],
                ['nama', 'email', 'foto', 'nohp', 'prodi']
            );

            Mahasiswa::updateOrCreate(
                ['nim' => 12309876333],
                [
                    'nama' => 'Josephine',
                    'prodi' => 'Teknologi Informasi',
                    'email' => 'josephine@example.com',
                    'nohp' => 628123456333,
                    'foto' => 'path/to/josephine.jpg',
                ]
            );

    }
}
