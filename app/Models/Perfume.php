<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'category',
        'size',
        'price',
        'image',
    ];
}
