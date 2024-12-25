<?php

namespace Modules\Property\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyPlain extends Model
{
    use HasFactory;

    protected $fillable = ['property_id', 'image'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
