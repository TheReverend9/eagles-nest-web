<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Allow DB::table to insert a primary key id of 0
        DB::statement("SET sql_mode='NO_AUTO_VALUE_ON_ZERO';");
        /* POSSIBLE CHANGE IN THE FUTURE */
        //Populate the data for the "states" table. This fills in all the States in the table for the United States
        DB::table('states')->insert([
            'state_id' => 0,
            'state_name_short' => 'NA',
            'state_name' => 'N/A',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 1,
            'state_name_short' => 'AL',
            'state_name' => 'Alabama',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 2,
            'state_name_short' => 'AK',
            'state_name' => 'Alaska',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 3,
            'state_name_short' => 'AZ',
            'state_name' => 'Arizona',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 4,
            'state_name_short' => 'AR',
            'state_name' => 'Arkansas',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 5,
            'state_name_short' => 'CA',
            'state_name' => 'California',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 6,
            'state_name_short' => 'CO',
            'state_name' => 'Colorado',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 7,
            'state_name_short' => 'CT',
            'state_name' => 'Connecticut',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 8,
            'state_name_short' => 'DE',
            'state_name' => 'Delaware',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 9,
            'state_name_short' => 'FL',
            'state_name' => 'Florida',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 10,
            'state_name_short' => 'GA',
            'state_name' => 'Georgia',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 11,
            'state_name_short' => 'HI',
            'state_name' => 'Hawaii',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 12,
            'state_name_short' => 'ID',
            'state_name' => 'Idaho',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 13,
            'state_name_short' => 'IL',
            'state_name' => 'Illinois',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 14,
            'state_name_short' => 'IN',
            'state_name' => 'Indiana',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 15,
            'state_name_short' => 'IA',
            'state_name' => 'Iowa',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 16,
            'state_name_short' => 'KS',
            'state_name' => 'Kansas',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 17,
            'state_name_short' => 'KY',
            'state_name' => 'Kentucky',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 18,
            'state_name_short' => 'LA',
            'state_name' => 'Louisiana',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 19,
            'state_name_short' => 'ME',
            'state_name' => 'Maine',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 20,
            'state_name_short' => 'MD',
            'state_name' => 'Maryland',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 21,
            'state_name_short' => 'MA',
            'state_name' => 'Massachusetts',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 22,
            'state_name_short' => 'MI',
            'state_name' => 'Michigan',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 23,
            'state_name_short' => 'MN',
            'state_name' => 'Minnesota',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 24,
            'state_name_short' => 'MS',
            'state_name' => 'Mississippi',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 25,
            'state_name_short' => 'MO',
            'state_name' => 'Missouri',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 26,
            'state_name_short' => 'MT',
            'state_name' => 'Montana',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 27,
            'state_name_short' => 'NE',
            'state_name' => 'Nebraska',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 28,
            'state_name_short' => 'NV',
            'state_name' => 'Nevada',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 29,
            'state_name_short' => 'NH',
            'state_name' => 'New Hampshire',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 30,
            'state_name_short' => 'NJ',
            'state_name' => 'New Jersey',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 31,
            'state_name_short' => 'NM',
            'state_name' => 'New Mexico',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 32,
            'state_name_short' => 'NY',
            'state_name' => 'New York',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 33,
            'state_name_short' => 'NC',
            'state_name' => 'North Carolina',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 34,
            'state_name_short' => 'ND',
            'state_name' => 'North Dakota',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 35,
            'state_name_short' => 'OH',
            'state_name' => 'Ohio',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 36,
            'state_name_short' => 'OK',
            'state_name' => 'Oklahoma',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 37,
            'state_name_short' => 'OR',
            'state_name' => 'Oregon',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 38,
            'state_name_short' => 'PA',
            'state_name' => 'Pennsylvania',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 39,
            'state_name_short' => 'RI',
            'state_name' => 'Rhode Island',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 40,
            'state_name_short' => 'SC',
            'state_name' => 'South Carolina',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 41,
            'state_name_short' => 'SD',
            'state_name' => 'South Dakota',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 42,
            'state_name_short' => 'TN',
            'state_name' => 'Tennessee',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 43,
            'state_name_short' => 'TX',
            'state_name' => 'Texas',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 44,
            'state_name_short' => 'UT',
            'state_name' => 'Utah',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);


        DB::table('states')->insert([
            'state_id' => 45,
            'state_name_short' => 'VT',
            'state_name' => 'Vermont',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 46,
            'state_name_short' => 'VA',
            'state_name' => 'Virginia',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 47,
            'state_name_short' => 'WA',
            'state_name' => 'Washington',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 48,
            'state_name_short' => 'WV',
            'state_name' => 'West Virgina',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 49,
            'state_name_short' => 'WI',
            'state_name' => 'Wisconsin',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        DB::table('states')->insert([
            'state_id' => 50,
            'state_name_short' => 'WY',
            'state_name' => 'Wyoming',
            'created_at' => now(), 
            'updated_at' => now(),
        ]);
    }
}
