<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('people')->insert([
            'firstname'     => 'fName',
            'lastname'    => 'lName',
            'age' => 20
        ]);
        DB::table('people')->insert([
            'firstname'     => 'FName',
            'lastname'    => 'LName',
            'age' => 30
        ]);
    }

}
