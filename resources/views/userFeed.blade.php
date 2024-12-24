<?php
use Illuminate\Support\Facades\Auth;
use App\Models\User;

$troop_id = Session('troop_id');
$title = "Troop " . Session('troop_number') . " Feed";
$createStr = "/Troop/" . $troop_id . "/CreatePost";
?>

@extends('/layouts/layout')

@section('content')
<x-page-title :title="$title" />
<div class="pb-20">
    @if(count($posts) == 0)
    
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