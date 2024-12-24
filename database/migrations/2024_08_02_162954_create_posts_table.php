<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('content', length: 1000);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('troop_id');
            $table->unsignedBigInteger('council_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('country_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('troop_id')->references('troop_id')->on('troops');
            $table->foreign('council_id')->references('council_id')->on('councils');
            $table->foreign('state_id')->references('state_id')->on('states');
            $table->foreign('country_id')->references('country_id')->on('countries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
