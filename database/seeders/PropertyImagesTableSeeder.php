<?php

namespace Database\Seeders;

use App\Models\PropertyImage;
use Illuminate\Database\Seeder;
use Modules\Property\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'path' => 'images/property-d-1-1.jpg',
            ]);

            PropertyImage::create([
                'property_id' => $property->id,
                'path' => 'images/property-d-1-2.jpg',
            ]);
        }
    }
}
