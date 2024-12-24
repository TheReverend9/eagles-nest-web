<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouncilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Allow DB::table to insert a primary key id of 0
        DB::statement("SET sql_mode='NO_AUTO_VALUE_ON_ZERO';");
        //Populate the default value for the "councils" table. The default value is an NA value.
        DB::table('councils')->insert([
            'council_id' => 0,
            'council_name' => 'No Council',
            'state_id' => 0,
            'country_id' => 0,
            'phone_id' => 0,
            'email' => 'NA',
        ]);
    }
}
