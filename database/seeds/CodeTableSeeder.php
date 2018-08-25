<?php

use Illuminate\Database\Seeder;

class CodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codes')->insert([
            'code'     => '07580530',
            'people_id'     => 1
        ]);
        DB::table('codes')->insert([
            'code'     => '05300758',
            'people_id'     => 2
        ]);
    }
}
