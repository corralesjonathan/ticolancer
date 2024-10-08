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
        Schema::create('users_ticolancers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->char('user_type')->default('B');
            $table->integer('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('picture')->nullable();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->foreignId('provinces_ticolancers_id')->nullable()->constrained();
            $table->string('city')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_ticolancers');
    }
};
