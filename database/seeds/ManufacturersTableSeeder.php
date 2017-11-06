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
       		['id'=>2,'name'=>'Asus'],
          ['id'=>3,'name'=>'Dell'],
          ['id'=>4,'name'=>'Samsung'],
          ['id'=>5,'name'=>'Oppo'],
          ['id'=>6,'name'=>'Sony'],
          ['id'=>7,'name'=>'Iphone'],
       ]);
    }
}
