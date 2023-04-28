<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->string('code', 255);
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('verification_type_id');
            $table->foreign('verification_type_id')->references('id')->on('verification_types');
            $table->timestamp('expires_at')->default(DB::raw('DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 3 DAY)'));
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->primary(['code', 'user_id', 'verification_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verification');
    }
};
