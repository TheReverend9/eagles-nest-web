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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('f_name');
            $table->string('l_name');
            $table->unsignedBigInteger('troop_id');
            $table->unsignedBigInteger('troop_role_id');
            $table->unsignedBigInteger('troop_rank_id');
            $table->unsignedBigInteger('phone_id')->default(0);
            $table->foreign('troop_id')->references('troop_id')->on('troops');
            $table->foreign('troop_role_id')->references('troop_role_id')->on('troop_roles');
            $table->foreign('troop_rank_id')->references('troop_rank_id')->on('troop_ranks');
            $table->foreign('phone_id')->references('phone_id')->on('phone_numbers');
            $table->string('email', length: 320)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
