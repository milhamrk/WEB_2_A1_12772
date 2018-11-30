<?php

use Illuminate\Database\Seeder;

class IlhamRizki_seeder_12772 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('employee')->insert([
                'name' => $faker->name,
                'username' => $faker->unique()->username, //email unique
                'password' => $faker->phoneNumber,
                'companyEmail' => $faker->email,
            ]);
        }
    }
}
