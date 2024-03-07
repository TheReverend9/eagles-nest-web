<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Country extends Model
{
    use HasFactory;

    public static function getCountryInfo($country_id) {
        $countryInfo = DB::table('country')
            ->select('*')
            ->where("country.country_id", "=", $country_id)
            ->get();
        
        return $countryInfo;
    }
}
