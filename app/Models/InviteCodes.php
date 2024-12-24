<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InviteCodes extends Model
{
    use HasFactory;

    public static function getTroopInv($inv_code) {
        $troopInfo = DB::table('invite_codes')
            ->join('troops', 'invite_codes.inv_id', '=', 'troops.inv_id')
            ->select('troops.troop_number')
            ->where("invite_codes.inv_code", "=", $inv_code)
            ->get();

        return $troopInfo;
    }
}
