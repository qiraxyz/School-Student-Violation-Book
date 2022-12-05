<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as data;
use Faker\Factory as faker;

class pelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create('id_ID');
        $tindak = array('iya', 'tidak');
        $lanjut = $tindak[array_rand($tindak)];

        data::table('pelanggarans')->insert([
            'pelanggaran' => $faker->text,
            'tindak_lanjut' => $lanjut,
            'jumlah_point' => $faker->numberBetween(10, 50),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
