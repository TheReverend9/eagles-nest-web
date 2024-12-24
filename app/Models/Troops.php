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

    public static function getInviteCode($inv_code) {
        $troopInfo = DB::table('troops')
            ->join('invite_codes', 'invite_codes.inv_id', '=', 'troops.inv_id')
            ->select('troops.troop_id')
            ->where("invite_codes.inv_code", "=", $inv_code)
            ->value('troops.troop_id');

        return $troopInfo;
    }

}
