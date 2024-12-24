<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'troop_id',
        'council_id',
        'state_id',
        'country_id',
    ];

    public static function getTroopPosts($troop_id){
        $troopPosts = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.user_id')
            ->join('troops', 'troops.troop_id', '=', 'users.troop_id')
            ->join('troop_roles', 'troop_roles.troop_role_id', '=', 'users.troop_role_id')
            ->join('troop_ranks', 'troop_ranks.troop_rank_id', '=', 'users.troop_rank_id')
            ->select('posts.created_at AS creation_date', 'posts.*', 'users.f_name', 'users.l_name', 'troops.troop_id', 'troops.troop_number', 'troop_roles.*', 'troop_ranks.*')
            ->where("troops.troop_id", "=", $troop_id)
            ->latest('creation_date')
            ->get();
        return $troopPosts;
    }

    
}
