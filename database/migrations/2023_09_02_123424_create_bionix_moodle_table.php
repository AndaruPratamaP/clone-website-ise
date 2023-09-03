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
        Schema::create('bionix_moodle', function (Blueprint $table) {
            $table->id();
            $table->uuid('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->string('username', 255);
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('course1', 255);
            $table->string('role1', 255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bionix_moodle');
    }
};
