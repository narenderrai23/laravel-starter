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
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Properties Seed
         * ------------------
         */

        // DB::table('properties')->truncate();
        // echo "Truncate: properties \n";

        Property::factory()->count(20)->create();
        $rows = Property::all();
        echo " Insert: properties \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
