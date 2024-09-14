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
        Schema::create('releases', function (Blueprint $table) {
            $table->string('release_tittle')->nullable();
            $table->string('release_featuring')->nullable();
            $table->string('image_file_path')->nullable();
            $table->string('release_format')->nullable();
            $table->string('release_type')->nullable();
            $table->string('release_explicit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('releases');
    }
};
