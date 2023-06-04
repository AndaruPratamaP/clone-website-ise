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
        Schema::create('grand_talkshow', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('share_proof_file', 255);
            $table->string('referral', 255);
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('status_type_id')->default("2");
            $table->foreign('status_type_id')->references('id')->on('status_types');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grand_talkshow');
    }
};
