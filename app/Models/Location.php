<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'slug'];


    protected static function booted()
    {
        static::creating(function ($location) {
            $location->slug = Str::slug($location->name);
        });
    }
}
