<?php

namespace App\Models;

use Modules\Category\Models\Category;
use Illuminate\Database\Eloquent\Model;

class EstimateQuery extends Model
{
    protected $fillable = [
        'full_name', 'phone_number', 'location_id', 'property_type_id',
        'min_beds', 'min_baths', 'min_area', 'max_area'
    ];

    // Optionally, define relationships if needed
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(Category::class, 'property_type_id');
    }
}
