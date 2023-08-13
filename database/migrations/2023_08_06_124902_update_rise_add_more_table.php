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
        Schema::table('rise', function (Blueprint $table) {
            $table->string('answer_file_final', 255)->nullable(true);
            $table->string('answer_file_semifinal', 255)->nullable(true);
            $table->string('answer_file_penyisihan', 255)->nullable(true);
            $table->string('poster_file_penyisihan', 255)->nullable(true);
            $table->string('account_owner', 255)->nullable(true);
            $table->string('bank_name', 255)->nullable(true);
            $table->string('payment_file', 255)->nullable(true);
            $table->string('youtube_link', 255)->nullable(true);
            $table->uuid('payment_id')->nullable(true);
            $table->foreign('payment_id')->references('id')->on('payment');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
