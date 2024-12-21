<?php

namespace Modules\Tag\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Tag;

class TagDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate the table to avoid duplicates (optional)
        DB::table('tags')->truncate();
        echo "Truncate: tags \n";

        // Predefined tags for real estate
        $realEstateTags = [
            'Apartment',
            'Villa',
            'Office Space',
            'Residential',
            'Commercial',
            'Land',
            'Luxury',
            'Budget-Friendly',
            'Beachfront',
            'City Center',
            'Suburban',
            'Furnished',
            'Unfurnished',
            'New Construction',
            'Renovated',
            'For Sale',
            'For Rent',
            'Pet-Friendly',
            'Gated Community',
            'Green Building'
        ];

        // Insert predefined tags
        foreach ($realEstateTags as $tag) {
            Tag::create(['name' => $tag]);
        }

        echo "Insert: real estate tags \n\n";

        // Enable foreign key checks
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
