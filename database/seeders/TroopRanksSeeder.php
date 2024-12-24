<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TroopRanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Allow DB::table to insert a primary key id of 0
        DB::statement("SET sql_mode='NO_AUTO_VALUE_ON_ZERO';");
        //Populate the data for the "troop_ranks" table, which is used to identify a Scout's rank.
        DB::table('troop_ranks')->insert([
            'troop_rank_id' => 0,
            'rank_name' => 'NA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('troop_ranks')->insert([
            'troop_rank_id' => 1,
            'rank_name' => 'Scout',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_ranks')->insert([
            'troop_rank_id' => 2,
            'rank_name' => 'Tenderfoot',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_ranks')->insert([
            'troop_rank_id' => 3,
            'rank_name' => 'Second Class',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_ranks')->insert([
            'troop_rank_id' => 4,
            'rank_name' => 'First Class',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_ranks')->insert([
            'troop_rank_id' => 5,
            'rank_name' => 'Star',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_ranks')->insert([
            'troop_rank_id' => 6,
            'rank_name' => 'Life',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_ranks')->insert([
            'troop_rank_id' => 7,
            'rank_name' => 'Eagle',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
    }
}
