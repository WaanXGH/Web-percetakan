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
            'value'=>'WaanPrint',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'location',
            'label'=>'alamat',
            'value'=>'Jl. Lap. Bola Rw. Butun, RT.001/RW.006, Ciketing Udik, Kec. Bantar Gebang, Kota Bks, Jawa Barat 17153 ',
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

        setting::create([
            'key'=>'_whatsapp',
            'label'=>'whatsapp',
            'value'=>'https://wa.me/6283897345926',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_github',
            'label'=>'github',
            'value'=>'https://github.com/WaanXGH/Web-Personal',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_instagram',
            'label'=>'instagram',
            'value'=>'https://instagram.com/naraatermuxxx',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_email',
            'label'=>'email',
            'value'=>'xycoPrint@gmail.com',
            'type'=>'text',
        ]);

// command ketika ingin menambahakan setting value
// pa migrate:refresh --path='./database/migrations/nama tabel'

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
