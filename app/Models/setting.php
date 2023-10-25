<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
     protected $fillable =[
    'key',
    'label',
    'value',
    'type',
];
    use HasFactory;
}
