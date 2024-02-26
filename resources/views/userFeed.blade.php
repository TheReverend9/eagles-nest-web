<?php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
$troop_id = $user['troop_id'];
$createStr = "/TroopFeed/createPost/".$troop_id;
?>

@extends('layout')

@section('content')

<div class="">
    @if(count($posts) == 0)
        <h3>Sorry, nothing is in your feed!</h3>
    
    @else
        @foreach($posts as $post)
            <x-feed-card :post="$post" />
        @endforeach
    @endif

    <div class="btm-nav">
        <button class="text-primary bg-primary-content active">
            <span class="material-symbols-outlined">
                home
            </span>
        </button>
        <a href="<?php echo$createStr;?>" class="bg-primary-content">
            <button href="/createPost" class="text-primary">
                <span class="material-symbols-outlined">
                    add_box
                </span>
            </button>
        </a>
        <button class="text-primary bg-primary-content">
            <span class="material-symbols-outlined">
                article
            </span>
        </button>
    </div>
    
</div>



@endsection