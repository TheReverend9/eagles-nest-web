<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TroopPosts extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable = [
        'user_id',
        'troop_id',
        'council_id',
        'state_id'
    ];
}
