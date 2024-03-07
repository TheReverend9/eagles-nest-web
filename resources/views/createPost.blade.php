<?php
$user_id = Session('user_id');
$f_name = Session('f_name');
$l_name = Session('l_name');
$troop_number = Session('troop_number');


if ($postType == 'Troop') {
    $council_id = 0;
    $state_id = "NA";
    $header = "Create a post for Troop " . $troop_number;
} elseif ($postType == 'Council') {
    $troop_id = 0;
    $council_id = Session('council_id');
    $state_id = "NA";
    $header = "Create a post for " . $council_name;
} elseif ($postType == 'State') {
    $state_id = Session('state_id');
    $troop_id = 0;
}
?>

@extends('layout')

@section('content')
<div class="user-feed-posts">
    <h1 class="text-center text-primary text-xl font-semibold mt-5">{{$header}}</h1>
    <form method="POST" action="/FeedPage">
        @csrf
        <input type="hidden" name="troop_id" value="{{$troop_id}}">
        <input type="hidden" name="council_id" value="{{$council_id}}">
        <input type="hidden" name="user_id" value="{{$user_id}}">
        <input type="hidden" name="country_id" value="{{$country_id}}">

        <div class="bg-primary-content rounded-box content-margins-5">

            <div class="content-flex user-feed-posts-username">
                <div class="avatar">
                    <div class="w-8 rounded-full">
                    <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <h3 class="margin-left-10 text-xl font-medium">
                    <a>{{$f_name}} {{$l_name}}</a>
                </h3>
                <h3 class="margin-left-10 text-xl font-medium">
                    <a class="text-accent">Troop {{$troop_number}}</a>
                </h3>
            </div>
            <div class="content-flex user-feed-posts-content">
                    <textarea name="postContent" id="textarea" maxlength="10000" class="textarea textarea-lg bg-primary-content w-full create-post-focus post-content-resize" placeholder="Be Courteous. . ."></textarea>
            </div>
            

        </div>
        <div class="create-container">
            <button class="create-btn btn bg-primary text-primary-content" name="postBtn">Post</button>
        </div>
    </form>

</div>
<div class="btm-nav">

    <a href="/" class="bg-primary-content">
        <button class="text-primary bg-primary-content">
            <span class="material-symbols-outlined">
                home
            </span>
        </button>
    </a>

    <button class="text-primary bg-primary-content active">
        <span class="material-symbols-outlined">
            add_box
        </span>
    </button>

    <button class="text-primary bg-primary-content">
        <span class="material-symbols-outlined">
            article
        </span>
    </button>

</div>  
<script>
    const textareaEle = document.getElementById('textarea');

    textareaEle.addEventListener('input', () => {
        // Code to be executed when user types in textarea
        textarea.style.height = 'auto';
        textarea.style.height = `${textarea.scrollHeight}px`;
    });

    

</script>

@endsection