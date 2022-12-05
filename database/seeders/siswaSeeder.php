<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as data;
use Faker\Factory as faker;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create('id_ID');

        $kelam = array('Laki-laki', 'Perempuan');

        $kelas = array('X','XI','XII');

        $num = array('1','2','3','4','5','6','7','8','9','0');

        $totkel = array('1', '2', '3', '4', '5');

        $totkelas = $totkel[array_rand($totkel)];

        $jurusan = array(
            'PPLG 1',
            'PPLG 2',
            'PPLG 3',
            'PPLG 4',
            'PPLG 5',
            'TKJT 1',
            'TKJT 2',
            'TKJT 3',
            'TKJT 4',
            'TKJT 5',
            'Broadcast 1',
            'Broadcast 2',
            'Broadcast 3',
            'Broadcast 4',
            'Broadcast 5',
            'Animasi 1',
            'Animasi 2',
            'Animasi 3',
            'Animasi 4',
            'Animasi 5',
            'TEI 1',
            'TEI 2',
            'TEI 3',
            'TEI 4',
            'TEI 5'
        );

        $jurusans= $jurusan[array_rand($jurusan)];
        $kelass= $kelas[array_rand($kelas)];
        $nisn = rand(1000000000,9999999999);
        $nomer = rand(620000000000,629999999999);
        $kelamin = $kelam[array_rand($kelam)];


        data::table('siswas')->insert([
            
            'nama_siswa' => $faker->name,
            'kelas_siswa' => $kelass,
            'jurusan' => $jurusans,
            'nisn' => $nisn,
            'jenis_kelamin' =>$kelamin,
            'alamat' => $faker->address,
            'no_telp' => $nomer,
            'wali_kelas' => $faker->name,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
