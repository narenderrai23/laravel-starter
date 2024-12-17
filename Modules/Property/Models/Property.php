<?php

namespace Modules\Property\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'properties';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Property\database\factories\PropertyFactory::new();
    }
}
