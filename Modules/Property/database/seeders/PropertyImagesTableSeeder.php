<?php

namespace Modules\Property\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Property\Models\Property;
use Modules\Property\Models\PropertyImage;

class PropertyImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $property = Property::first(); // Assuming you have a property in the `properties` table.

        if ($property) {
            PropertyImage::create([
                'property_id' => $property->id,
                'image' => 'images/property-d-1-1.jpg',
            ]);

            PropertyImage::create([
                'property_id' => $property->id,
                'image' => 'images/property-d-1-2.jpg',
            ]);
        }
    }
}
