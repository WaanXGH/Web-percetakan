<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    use HasFactory;
    protected $fillable =[
            'nama',
            'email',
            'tentang',
            'isipesan',
        ];
}
