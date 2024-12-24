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
        Schema::create('councils', function (Blueprint $table) {
            $table->id('council_id');
            $table->string('council_name', length: 255);
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('phone_id');
            $table->foreign('state_id')->references('state_id')->on('states');
            $table->foreign('country_id')->references('country_id')->on('countries');
            $table->foreign('phone_id')->references('phone_id')->on('phone_numbers');
            $table->string('email', length: 320)->unique();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('councils');
    }
};
