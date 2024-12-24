<?php
$user_id = Session('user_id');
$f_name = Session('f_name');
$l_name = Session('l_name');
$home = "/Troop/" . Session('troop_id') . "/Feed";


//Set post type to prevent the need of writing multiple CREATE POST views.
//ORDER IS
// Troop ID
// Council ID
// State ID
// Country ID
if ($postType == 'Troop') {
    $troop_id = Session('troop_id');
    $council_id = 0;
    $state_id = 0;
    $country_id = 0;
    $troop_number = Session('troop_number');
    $title = "Create a post for Troop " . $troop_number;
    $redirect = "/FeedPage/Troop";
} elseif ($postType == 'Council') {
    $troop_id = 0;
    $council_id = Session('council_id');
    $state_id = 0;
    $country_id = 0;
    $council_name = Session('council_name');
    $title = "Create a post for " . $council_name;
    $redirect = "/FeedPage/Council";
} elseif ($postType == 'State') {
    $troop_id = 0;
    $council_id = 0;
    $state_id = Session('state_id');
    $country_id = 0;
    $state_name = Session('state_name');
    $title = "Create a post for " . $state_name;
    $redirect = "/FeedPage/State";
} elseif ($postType == 'Country') {
    $troop_id = 0;
    $council_id = 0;
    $state_id = 0;
    $country_id = Session('country_id');
    $country_name = Session('country_name');
    $title = "Create a post for " . $country_name;
    $redirect = "/FeedPage/Country";
}
?>

@extends('/layouts/layout')

@section('content')

<x-page-title :title="$title"/>
<div class="user-feed-posts">
    <form method="POST" action="{{$redirect}}">
        @csrf
        <input type="hidden" name="user_id" value="{{$user_id}}">
        <input type="hidden" name="troop_id" value="{{$troop_id}}">
        <input type="hidden" name="council_id" value="{{$council_id}}">
        <input type="hidden" name="state_id" value="{{$state_id}}">
        <input type="hidden" name="country_id" value="{{$country_id}}">

        <div class="bg-primary-content rounded-box content-margins-5 shadow-lg">

            <div class="flex my-5 pb-2 bg-cardbg rounded-t-2xl">
                <div class="avatar">
                    <div class="w-10 h-10 ml-3 mt-3 rounded-full">
                    <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <div class="max-md:flex-col content-flex user-feed-posts-username pt-2">
                    <h3 class="custom-header margin-left-10 text-2xl content-center">
                        <a>{{$f_name}} {{$l_name}}</a>
                    </h3>
                    <h3 class="custom-header margin-left-10 text-2xl content-center">
                        <a class="text-accent">Troop {{$troop_number}}</a>
                    </h3>
                </div>
            </div>
            <div class="content-flex user-feed-posts-content">
                    <textarea name="content" id="textarea" maxlength="1000" class="textarea textarea-lg bg-primary-content w-full create-post-focus post-content-resize" placeholder="Be Courteous. . ."></textarea>
            </div>
            

        </div>
        <div class="create-container">
            <button class="create-btn btn bg-primary text-primary-content" name="postBtn">Post</button>
        </div>
    </form>

</div>
<div class="btm-nav">

    <a href="{{$home}}" class="bg-primary-content">
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