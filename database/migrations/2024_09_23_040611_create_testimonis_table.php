<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('position', ['
            PENGGUNA',
            'ARTIS',
            'INFLUENCER_TIKTOK',
            'INFLUENCER_YOUTUBE',
            'INFLUENCER_INSTAGRAM',
            'CEO_PT_RANDOM'])->nullable() ;
            $table->text('quote');
            $table->string('thumbnail')->nullable();  // Pastikan kolom thumbnail ada di sini
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
