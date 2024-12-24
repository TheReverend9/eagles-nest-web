<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TroopRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Allow DB::table to insert a primary key id of 0
        DB::statement("SET sql_mode='NO_AUTO_VALUE_ON_ZERO';");
        //Populate the data for the "troop_roles" table, which is used to identify a Scout's "Role" in the troop.
        DB::table('troop_roles')->insert([
            'troop_role_id' => 0,
            'role_name' => 'No Role',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 1,
            'role_name' => 'Senior Patrol Leader',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 2,
            'role_name' => 'Assistan Senior Patrol Leader',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 3,
            'role_name' => 'Patrol Leader',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 4,
            'role_name' => 'Assistant Patrol Leader',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 5,
            'role_name' => 'Troop Guide',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 6,
            'role_name' => 'Quartermaster',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 7,
            'role_name' => 'Scribe',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 8,
            'role_name' => 'Den Chief',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 9,
            'role_name' => "Chaplain's Aide",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 10,
            'role_name' => 'Historian',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 11,
            'role_name' => 'Instructor',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 12,
            'role_name' => 'Webmaster',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 13,
            'role_name' => 'Bugler',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 14,
            'role_name' => 'Order of the Arrow Representative',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 15,
            'role_name' => 'Outdoor Ethics Guide',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('troop_roles')->insert([
            'troop_role_id' => 16,
            'role_name' => 'Junior Assistant Scoutmaster',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
