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
        Schema::create('troops', function (Blueprint $table) {
            $table->id('troop_id');
            $table->string('troop_number', length: 4);
            $table->string('email')->unique();
            $table->unsignedBigInteger('inv_id');
            $table->unsignedBigInteger('phone_id');
            $table->unsignedBigInteger('council_id');
            $table->foreign('inv_id')->references('inv_id')->on('invite_codes');
            $table->foreign('phone_id')->references('phone_id')->on('phone_numbers');
            $table->foreign('council_id')->references('council_id')->on('councils');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('troops');
    }
};
