<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class State extends Model
{
    use HasFactory;

    public static function getstateInfo($state_id) {
        $stateInfo = DB::table('states')
            ->select('*')
            ->where("states.state_id", "=", $state_id)
            ->get();
        
        return $stateInfo;
    }
}
