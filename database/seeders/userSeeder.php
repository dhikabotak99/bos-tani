<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Faker\Factory as Faker;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'pembeli',
            'email'=>'pembeli@gmail.com',
            'password'=> bcrypt('pembeli123'),
            'phone'=> '0812123',
            'role'=> 'ROLEPB',
        ]);
    }
}
