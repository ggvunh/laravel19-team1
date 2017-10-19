<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert([
       		['id'=>1,'name'=>'Apple'],
       		['id'=>2,'name'=>'Samsung'],
       		
       ]);
    }
}
