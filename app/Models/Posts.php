<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class posts extends Model
{
    use HasFactory;

    public static function getTroopPosts($troop_id){
        $troopPosts = DB::table('users')
            ->join('troop_posts', 'users.id', '=', 'troop_posts.user_id')
            ->join('troops', 'troops.troop_id', '=', 'users.troop_id')
            ->select('*')
            ->where("troops.troop_id", "=", $troop_id)
            ->orderByDesc('id')
            ->get();
        return $troopPosts;
    }

    
}
