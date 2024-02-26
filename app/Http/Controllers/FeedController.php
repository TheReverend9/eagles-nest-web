<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\TroopPosts;
use App\Models\Troops;
use Illuminate\Support\Facades\Auth;


class FeedController extends Controller
{
    //
    public function showTroopPosts($troop_id) {
        return view('userFeed',[
            'posts' => Posts::getTroopPosts($troop_id)
        ]);
    }

    public function createTroopPost($troop_id) {
        return view('createPost',[
            'posts' => Troops::getTroopInfo($troop_id)
        ]);
    }

    public function storePost(Request $request) {
        $user = Auth::user();
        $troop_id = $user['troop_id'];
        $redirectStr = '/TroopFeed/'.$troop_id;

        $newPost = new TroopPosts;
        $newPost->user_id=13;
        $newPost->country_id="US";
        $newPost->troop_id=$request->troop_id;
        $newPost->council_id=$request->council_id;
        $newPost->content=$request->postContent;
        $newPost->save();

        return redirect($redirectStr);
    }
}
