<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'tag',
        'tag_color',
        'date',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}