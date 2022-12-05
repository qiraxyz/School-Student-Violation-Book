<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as data;
use Faker\Factory as Faker;

class guruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $mapel = array(
            'Matematika', 
            'Bahasa Indonesia', 
            'PKN', 
            'Agama Islam', 
            'Bahasa Sunda',
            'Informatika',
            'Bahasa Inggris'
        );
        $random_keys= $mapel[array_rand($mapel)];

        data::table('gurus')->insert([
            'nama_guru' => $faker->name,
            'mata_pelajaran' => $random_keys,
            'alamat' => $faker->address,
            'umur' => $faker->numberBetween(20, 60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
