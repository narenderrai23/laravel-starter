<?php

namespace Modules\Property\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Property\Models\Property;

class PropertyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        try {
            DB::table(table: 'properties')->truncate();
            echo "Truncate: properties\n";

            Property::factory()->count(20)->create();
            echo "Insert: properties\n";
        } catch (\Exception $e) {
            echo "Error seeding properties: " . $e->getMessage() . "\n";
        }
    }
}
