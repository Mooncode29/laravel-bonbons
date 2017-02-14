<?php

use Illuminate\Database\Seeder;

class BonbonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bonbons')->insert([
        	'name'=>'Haribo',
        	'quantity'=>'3',
        	]);
        DB::table('bonbons')->insert([
        	'name'=>'Mentos',
        	'quantity'=>'4',
        	]);
    }
}
