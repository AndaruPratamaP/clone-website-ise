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
        Schema::create('ds_academy', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('team_name');
            $table->uuid('ketua_id');
            $table->foreign('ketua_id')->references('id')->on('users');
            $table->uuid('payment_id');
            $table->foreign('payment_id')->references('id')->on('payment');
            $table->uuid('status_type_id');
            $table->foreign('status_type_id')->references('id')->on('status_types');
            $table->string('ketua_major');
            $table->string('ketua_instagram_link');
            $table->string('ketua_twibbon_link');
            $table->string('ketua_cv_file');
            $table->string('ketua_student_card');
            $table->string('first_full_name');
            $table->string('first_institution');
            $table->string('first_major');
            $table->string('first_email');
            $table->string('first_wa');
            $table->string('first_instagram_link');
            $table->string('first_twibbon_link');
            $table->string('first_cv_file');
            $table->string('first_student_card');
            $table->string('second_full_name');
            $table->string('second_institution');
            $table->string('second_major');
            $table->string('second_email');
            $table->string('second_wa');
            $table->string('second_instagram_link');
            $table->string('second_twibbon_link');
            $table->string('second_cv_file');
            $table->string('second_student_card');
            $table->string('motive_1');
            $table->string('motive_2');
            $table->string('motive_3');
            $table->string('motive_4');
            $table->string('answer_file', 255)->nullable(true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ds_academy');
    }
};
