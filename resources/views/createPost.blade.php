@extends('layout')

@section('content')
<div class="user-feed-posts">
    <h1 class="text-center text-primary text-xl font-semibold mt-5">Create a Post for Troop 795</h1>
    <form method="POST" action="/FeedPage">
        @csrf
        <input type="hidden" name="troop_id" value="{{$posts[0]->troop_id}}">
        <input type="hidden" name="council_id" value="1">
        <input type="hidden" name="user_id" value="13">
        <div class="bg-primary-content rounded-box content-margins-5">

            <div class="content-flex user-feed-posts-username">
                <div class="avatar">
                    <div class="w-8 rounded-full">
                    <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <h3 class="margin-left-10 text-xl font-medium">
                    <a>Austin Blackmon</a>
                </h3>
                <h3 class="margin-left-10 text-xl font-medium">
                    <a class="text-accent">Troop {{$posts[0]->troop_number}}</a>
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