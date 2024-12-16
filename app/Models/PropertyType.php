<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $fillable = ['name', 'slug'];

    protected static function booted()
    {
        static::creating(function ($propertyType) {
            $propertyType->slug = Str::slug($propertyType->name);
        });
    }

}
