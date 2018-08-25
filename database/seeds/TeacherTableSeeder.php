<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name'     => 'Nark',
            'people_id'     => 1
        ]);
        DB::table('teachers')->insert([
            'name'     => 'Nark',
            'people_id'     => 2
        ]);
    }
}
