<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            $gender = $faker->randomElement($array = array('Laki-laki'));
            $img = $faker->randomElement($array = array('icon2.png'));
            \DB::table('students')->insert([
                'id' => $faker->numberBetween($nim = 1000, $max = 9000),
                'nama' => $faker->name($gender),
                'Kelas' => $faker->century,
                'Jenis_Kelamin' => $gender,
                'Alamat' => $faker->address,
                'Foto' => $img
            ]);
        }
        
    }
}
