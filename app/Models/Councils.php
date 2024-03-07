<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Councils extends Model
{
    use HasFactory;

    public static function getcouncilInfo($council_id){
        $councilInfo = DB::table('councils')
            ->select('*')
            ->where("councils.council_id", "=", $council_id)
            ->get();
        
        return $councilInfo;
    }
}
