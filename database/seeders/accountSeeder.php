<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as data;
use Faker\Factory as Faker;

class accountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_EU');
        data::table('account')->insert([
            'username' => $faker->username,
            'password' => $faker->password,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
