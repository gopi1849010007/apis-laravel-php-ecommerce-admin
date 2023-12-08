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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('unit_number','20');
            $table->string('street_number','30');
            $table->string('address_line1','30');
            $table->string('address_line2','30');
            $table->string('city','20');
            $table->string('region','20');
            $table->integer('postal_code');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
