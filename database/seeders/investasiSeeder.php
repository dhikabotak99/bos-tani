<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Faker\Factory as Faker;

class investasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,25) as $index){
            DB::table('investasi')->insert([
                'Nama'=> 'Pepaya',
                'Harga'=>'1000',
                'Periode_Kontrak'=> '1',
                'Hasil'=> '15',
                'Periode_Bagi_hasil'=> '1',
                'Unit_Tersisa'=> '15',
                'img_path'=> 'pepaya.jpg'
            ]);
        }
    }
}
