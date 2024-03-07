<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\TroopPosts;
use App\Models\Troops;
use App\Models\Councils;
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
            'post' => Troops::getTroopInfo($troop_id),
            'postType' => 'Troop'
        ]);
    }

    public function createCouncilPost($council_id) {
        return view('createPost', [
            'post' => Councils::getCouncilInfo($council_id),
            'postType' => 'Council'
        ]);
    }

    public function storeTroopPost(Request $request) {
        $form = $request->validate([
            'user_id' => 'required',
            'troop_id' => 'required',
            'content' => 'required'
        ]);

        TroopPosts::create($form);
        $troop_id = Session('troop_id');
        $redirectStr = '/TroopFeed/'.$troop_id;

        // $newPost = new TroopPosts;
        // $newPost->user_id=$request->user_id;
        // $newPost->country_id=$request->country_id;
        // $newPost->troop_id=$request->troop_id;
        // $newPost->council_id=$request->council_id;
        // $newPost->content=$request->postContent;
        // $newPost->save();

        return redirect($redirectStr);
    }
}
