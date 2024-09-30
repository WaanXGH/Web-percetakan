<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class testimonisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() 
    {
        DB::table('testimonis')->insert([
            [
                'quote' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus...',
                'img' => 'assets/img/testimonials/testimonials-1.jpg',
                'name' => 'Saul Goodman',
                'position' => 'Ceo & Founder',
            ],
            [
                'quote' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam...',
                'img' => 'assets/img/testimonials/testimonials-5.jpg',
                'name' => 'John Larson',
                'position' => 'Entrepreneur',
            ],
        ]);
    }

    

}
