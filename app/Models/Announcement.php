<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon',
        'icon_bg',
        'bg_color',
        'border_color',
        'tag',
        'tag_color',
        'date',
        'category',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}