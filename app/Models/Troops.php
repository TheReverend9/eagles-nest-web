<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Troops extends Model
{
    use HasFactory;

    public static function getTroopInfo($troop_id){
        $troopInfo = DB::table('troops')
            ->select('*')
            ->where("troops.troop_id", "=", $troop_id)
            ->get();
        
        return $troopInfo;
    }

}
