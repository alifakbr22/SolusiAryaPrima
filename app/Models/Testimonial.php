<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'content',
        'client_name',
        'client_sector',
        'sort_order',
    ];

    protected $casts = [
        'sort_order' => 'integer',
    ];
}
