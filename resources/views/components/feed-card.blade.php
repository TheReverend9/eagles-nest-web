@props(['post'])

<?php
$date = new DateTime($post->creation_date);
$date->setTimeZone(new DateTimeZone('America/New_York'));
$creation_date = $date->format('M d, Y h:i a');

?>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
<script>
    console.log("<?php echo $creation_date?>");
    console.log("<?php echo $post->created_at?>");
    function like() {
        console.log("Executed <?php echo $creation_date?> Normally");
        $.ajax({
            type: "POST",
            url: '/FeedPage/Like',
            dataType: 'json',
            data: {registration: "success", name: "xyz", email: "abc@gmail.com"},
            success:function(data){
                console.log(data.registration);
            }
        });
    };
</script>
<div class="user-feed-posts">
    <form class="hidden">
        
    </form>
    <div class="bg-primary-content rounded-2xl content-margins-5 shadow-lg parchment">
        <div class="">
            <div class="flex my-5 pb-2 bg-cardbg rounded-t-2xl">
                <div class="avatar">
                    <div class="w-10 h-10 ml-3 mt-3 rounded-full">
                        <img src="https://laravel.com/img/logomark.min.svg" />
                    </div>
                </div>
                <div class="max-md:flex-col content-flex user-feed-posts-username pt-2">
                    <h3 class="custom-header margin-left-10 text-2xl content-center">
                        <a class="">{{$post->f_name}} {{$post->l_name}}</a>
                    </h3>
                    @if($post->troop_number != 0)
                        <h3 class="custom-header margin-left-10 text-2xl content-center">
                            <a class="text-accent">Troop {{$post->troop_number}}</a>
                        </h3>
                        @if($post->troop_role_id != 0)
                            <h3 class="custom-header margin-left-10 text-2xl content-center">
                                <a class="text-primary">{{$post->role_name}}</a>
                            </h3>
                        @endif
                    @endif
                </div>
            </div>
            <div class="content-flex">
                <div class="grid gap-5 grid-flow-col">
                    <div class="w-fit max-w-fit">
                        <ul class="bg-primary-content rounded-box user-feed-posts-navbar ml-5">
                            <li>
                                <button type="button" class="btn-no-hover" id="like" onclick="like()">
                                    <span class="material-symbols-outlined">
                                        thumb_up
                                    </span>
                                </button>
                            </li>
                            <li class="mt-5">
                                <button class="" id="comment">
                                    <span class="material-symbols-outlined">
                                        comment
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <p class="text-lg pr-5">{{$post->content}}</p>
                        <p class="text-xs object-none object-bottom mt-2 mb-3">{{$creation_date}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

