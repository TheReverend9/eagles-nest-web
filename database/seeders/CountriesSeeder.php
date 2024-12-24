<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Allow DB::table to insert a primary key id of 0
        DB::statement("SET sql_mode='NO_AUTO_VALUE_ON_ZERO';");
        /* Hopefully able to add more countries in the future. */
        //Populate the data in the "countries" table. Currently only available in one country.
        DB::table('countries')->insert([
            'country_id' => 0,
            'country_name_short' => 'NA',
            'country_name' => 'Not Available',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('countries')->insert([
            'country_id' => 1,
            'country_name_short' => 'USA',
            'country_name' => 'United States of America',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
