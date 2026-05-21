<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'location',
        'price',
        'bedrooms',
        'bathrooms',
        'area',
        'type',
        'status',
        'images',
        'is_featured',
        'order',
        'is_active'
    ];

    protected $casts = [
        'images' => 'array',
        'price' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];
}