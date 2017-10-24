<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
       		['id'=>1,'name'=>'Shipped'],
       		['id'=>2,'name'=>'Pending'],
       		['id'=>3,'name'=>'Delivered'],
       		['id'=>4,'name'=>'Processing']
       ]);
    }
}
