@props(['post'])

<?php
$date = new DateTime($post->creation_date);
$creation_date = $date->format('M d, Y h:i a');

?>

<div class="user-feed-posts">
    <form class="hidden">
        
    </form>
    <div class="bg-primary-content rounded-box content-margins-5">
        <div class=" ">
            <div class="content-flex user-feed-posts-username">
                <div class="avatar">
                    <div class="w-8 rounded-full">
                    <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <h3 class="margin-left-10 text-xl font-medium">
                    <a>{{$post->f_name}} {{$post->l_name}}</a>
                </h3>
                @if($post->troop_number != 0)
                    <h3 class="margin-left-10 text-xl font-medium">
                        <a class="text-accent">Troop {{$post->troop_number}}</a>
                    </h3>
                @endif
            </div>
            <div class="content-flex">
                <div class="width-max-100">
                    <ul class="menu bg-primary-content rounded-box user-feed-posts-navbar">
                        <li>
                            <button class="btn-no-hover" id="like">
                                <span class="material-symbols-outlined">
                                    thumb_up
                                </span>
                            </button>
                        </li>
                        <li>
                            <button class="btn-no-hover" id="comment">
                                <span class="material-symbols-outlined">
                                    comment
                                </span>
                            </button>
                        </li>
                        <li>
                            <button class="btn-no-hover" id="share">
                                <span class="material-symbols-outlined">
                                    share
                                </span>
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="user-feed-posts-content">
                    {{$post->content}}
                    <p class="text-xs object-none object-bottom">{{$creation_date}}</p>

                </div>

            </div>
        </div>
    </div>
</div>
<script>
    
</script>