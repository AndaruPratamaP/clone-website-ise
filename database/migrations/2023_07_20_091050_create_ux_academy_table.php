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
        Schema::create('ux_academy', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->uuid('payment_id');
            $table->foreign('payment_id')->references('id')->on('payment');
            $table->uuid('status_type_id');
            $table->foreign('status_type_id')->references('id')->on('status_types');
            $table->string('instagram_link', 255);
            $table->string('twibbon_link', 255);
            $table->string('cv_file', 255);
            $table->string('student_card', 255);
            $table->string('answer_file', 255)->nullable(true);
            $table->string('major', 255);
            $table->string('motive_1', 255);
            $table->string('motive_2', 255);
            $table->string('motive_3', 255);
            $table->string('motive_4', 255);
            $table->string('motive_5', 255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ux_academy');
    }
};
