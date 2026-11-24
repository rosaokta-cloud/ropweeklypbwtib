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
            'nim' => '12309876543',
            'nama' => 'Rose',
            'email' => 'roses@example.com',
            'foto' => 'path/to/foto.jpg',
            'nohp' => '628123456789',
            'prodi' => 'Teknologi Informasi',
        ],
    ],
    ['nim'], // Unique key(s) to check for duplicates
    ['nama', 'email', 'foto', 'nohp', 'prodi'] // Columns to update if nim already exists
);

        Mahasiswa::updateOrCreate([
                'nama' => 'Josephine',
                'nim' => 12309876333,
                'prodi' => 'Teknologi Informasi',
                'email' => 'josephine@example.com',
                'nohp' => 628123456333,
                'foto' => 'path/to/josephine.jpg'
        ]);

    }
}
