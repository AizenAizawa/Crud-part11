<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('siswas')->insert([
            [
                'nama' => 'Rafi',
                'kelas' => 'XII PPLG B',
                'foto' => null,
                'nik' => 33023123123,
                'nisn' => 00736231,
                'alamat' => 'Batang,Reban RT 14 RW 03',
                'jenis_kelamin' => 'L',
                'nama_ibu' => 'rara',
                'nama_ayah' => 'rara',
            ],
            [
                'nama' => 'Bagus',
                'kelas' => 'XII PPLG B',
                'foto' => null,
                'nik' => 330231231876,
                'nisn' => 0073623132,
                'alamat' => 'Batang,Reban RT 14 RW 03',
                'jenis_kelamin' => 'L',
                'nama_ibu' => 'rara',
                'nama_ayah' => 'rara',
            ],
            [
                'nama' => 'Bagus',
                'kelas' => 'XII PPLG B',
                'foto' => null,
                'nik' => 33023123453,
                'nisn' => 007362543,
                'alamat' => 'Batang,Reban RT 14 RW 03',
                'jenis_kelamin' => 'L',
                'nama_ibu' => 'rara',
                'nama_ayah' => 'rara',
            ],
        ]);
    }
}
