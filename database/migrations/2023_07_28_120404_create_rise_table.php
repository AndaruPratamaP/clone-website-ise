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
        Schema::create('rise', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('status_type_id');
            $table->foreign('status_type_id')->references('id')->on('status_types');
            $table->string('team_name', 255);
            $table->uuid('leader_id');
            $table->foreign('leader_id')->references('id')->on('users');
            // $table->string('leader_agency', 255);
            // $table->string('leader_name', 255);
            // $table->string('leader_phone', 255);
            // $table->string('leader_email', 255);
            $table->string('leader_twibbon', 255);
            $table->string('referral_code', 255);
            $table->string('leader_student_card', 1024);
            $table->string('leader_poster', 1024);
            $table->string('leader_ig_follow', 1024);

            $table->string('member1_name', 255);
            $table->string('member1_agency', 255);
            $table->string('member1_phone', 255);
            $table->string('member1_email', 255);
            $table->string('member1_twibbon', 255);
            $table->string('member1_student_card', 1024);
            $table->string('member1_poster', 1024);
            $table->string('member1_ig_follow', 1024);

            $table->string('member2_name', 255)->nullable(true);
            $table->string('member2_agency', 255)->nullable(true);
            $table->string('member2_phone', 255)->nullable(true);
            $table->string('member2_email', 255)->nullable(true);
            $table->string('member2_twibbon', 255)->nullable(true);
            $table->string('member2_student_card', 1024)->nullable(true);
            $table->string('member2_poster', 1024)->nullable(true);
            $table->string('member2_ig_follow', 1024)->nullable(true);
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            // $table->uuid('ketua_id');
            // $table->foreign('ketua_id')->references('id')->on('users');
            // $table->uuid('payment_id');
            // $table->foreign('payment_id')->references('id')->on('payment');
            // $table->uuid('status_type_id');
            // $table->foreign('status_type_id')->references('id')->on('status_types');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rise');
    }
};
