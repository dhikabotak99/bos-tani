<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Faker\Factory as Faker;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,25) as $index){
            DB::table('products')->insert([
                'Nama'=> 'asd',
                'Harga'=>'20000',
                'Asal'=> 'asdasf',
                'Deskripsi'=> 'asdasfasfasf',
                'Stock'=> '100',
                'img_path'=> 'sawi.jpg'
            ]);
        }
    }
}
