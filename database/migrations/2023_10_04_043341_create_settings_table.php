<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');

            $table->timestamps();
        });
        setting::create([
            'key'=>'_site_name',
            'label'=>'judul_situs',
            'value'=>'my_website',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'location',
            'label'=>'alamat',
            'value'=>'BantarGebang,Kota Bekasi,Jawa Barat ',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_tiktok',
            'label'=>'tiktok',
            'value'=>'https://www.tiktok.com/pfftitsuka',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_site_description',
            'label'=>'description web',
            'value'=>'ini adalah project pertama yang telah saya buat di laravel',
            'type'=>'text',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
