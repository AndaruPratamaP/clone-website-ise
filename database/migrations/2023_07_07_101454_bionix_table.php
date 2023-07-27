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
        Schema::create('bionix', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('team_name', 255);
            $table->uuid('ketua_id');
            $table->foreign('ketua_id')->references('id')->on('users');
            $table->string('asal_sekolah', 255);
            $table->string('ketua_student_card', 255);
            $table->string('ketua_poster', 255);
            $table->string('ketua_twibbon', 255);
            $table->string('ketua_bukti_insta', 255);
            $table->string('anggota_name', 255);
            $table->string('anggota_email', 255);
            $table->string('anggota_hp', 255);
            $table->string('anggota_student_card', 255);
            $table->string('anggota_poster', 255);
            $table->string('anggota_twibbon', 255);
            $table->string('anggota_bukti_insta', 255);
            $table->uuid('payment_id');
            $table->foreign('payment_id')->references('id')->on('payment');
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
