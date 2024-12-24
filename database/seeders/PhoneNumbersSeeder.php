<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneNumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Allow DB::table to insert a primary key id of 0
        DB::statement("SET sql_mode='NO_AUTO_VALUE_ON_ZERO';");
        //Populate the data for the "phone_numbers" table. Only one value is populated, which is the "No Phone" value.
        DB::table('phone_numbers')->insert([
            'phone_id' => 0,
            'country_code' => 'NA',
            'area_code' => 'NA',
            'phone_number' => 'NA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
