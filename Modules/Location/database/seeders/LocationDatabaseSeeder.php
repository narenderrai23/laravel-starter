<?php

namespace Modules\Location\database\seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); // Create a new Faker instance

        $locations = [
            ['name' => 'Andhra Pradesh'],
            ['name' => 'Arunachal Pradesh'],
            ['name' => 'Assam'],
            ['name' => 'Bihar'],
            ['name' => 'Chhattisgarh'],
            ['name' => 'Goa'],
            ['name' => 'Gujarat'],
            ['name' => 'Haryana'],
            ['name' => 'Himachal Pradesh'],
            ['name' => 'Jharkhand'],
            ['name' => 'Karnataka'],
            ['name' => 'Kerala'],
            ['name' => 'Madhya Pradesh'],
            ['name' => 'Maharashtra'],
            ['name' => 'Manipur'],
            ['name' => 'Meghalaya'],
            ['name' => 'Mizoram'],
            ['name' => 'Nagaland'],
            ['name' => 'Odisha'],
            ['name' => 'Punjab'],
            ['name' => 'Rajasthan'],
            ['name' => 'Sikkim'],
            ['name' => 'Tamil Nadu'],
            ['name' => 'Telangana'],
            ['name' => 'Tripura'],
            ['name' => 'Uttar Pradesh'],
            ['name' => 'Uttarakhand'],
            ['name' => 'West Bengal'],
            ['name' => 'Delhi'],
            ['name' => 'Jammu and Kashmir'],
            ['name' => 'Ladakh'],
        ];

        // Add additional fields to each location
        foreach ($locations as &$location) {
            $location['slug'] = Str::slug($location['name']);
            $location['description'] = $faker->paragraph; // Generate a random description
            $location['status'] = 1; // Default status
            $location['created_at'] = Carbon::now(); // Current timestamp
            $location['updated_at'] = Carbon::now(); // Current timestamp
        }

        // Insert into the database
        DB::table('locations')->insert($locations);
        echo "Inserted: Indian locations with name, slug, and additional fields \n";
    }
}
