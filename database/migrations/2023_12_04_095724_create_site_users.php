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
        Schema::create('site_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email_address','30')->unique();
            $table->string('phone_number','15');
            $table->string('password','200');
            $table->string('name','30');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_users');
    }
};
