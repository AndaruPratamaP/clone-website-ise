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
        Schema::table('is_class', function (Blueprint $table) {
            $table->string('upload_poster_file', 255);
            $table->string('follow_proof_file', 255);
        });
    }

    public function down(): void
    {
        //
    }
};
