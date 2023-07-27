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
        Schema::create('bionix_roadshow', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('team_name');
            $table->uuid('ketua_id');
            $table->foreign('ketua_id')->references('id')->on('users');
            $table->uuid('payment_id');
            $table->foreign('payment_id')->references('id')->on('payment');
            $table->uuid('status_type_id');
            $table->foreign('status_type_id')->references('id')->on('status_types');
            $table->string('school');
            $table->string('bank_account');
            $table->string('dp_amount');
            $table->string('payment_method');
            $table->string('payment_proof_dp');
            $table->string('payment_proof_pelunasan')->nullable(true);
            $table->string('promo_code')->nullable(true);
            $table->foreign('promo_code')->references('code')->on('bionix_coupon');
            $table->string('ketua_student_card')->nullable  (true);
            $table->string('ketua_poster_file')->nullable(true);
            $table->string('ketua_follow_ig_proof')->nullable(true);
            $table->string('ketua_twibbon_link')->nullable(true);
            $table->string('anggota_full_name')->nullable(true);
            $table->string('anggota_email')->nullable(true);
            $table->string('anggota_wa')->nullable(true);
            $table->string('anggota_student_card')->nullable(true);
            $table->string('anggota_poster_file')->nullable(true);
            $table->string('anggota_follow_ig_proof')->nullable(true);
            $table->string('anggota_twibbon_link')->nullable(true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bionix_roadshow');
    }
};
