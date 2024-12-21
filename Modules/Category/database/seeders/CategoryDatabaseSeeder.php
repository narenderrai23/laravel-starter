<?php

namespace Modules\Category\database\seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Modules\Category\Enums\CategoryStatus;

class CategoryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Initialize Faker
        $faker = Faker::create();

        // Predefined tags for real estate
        $realEstateTags = [
            'Commercial',
            'Residential',
        ];

        // Optional: Truncate the table before seeding
        DB::table('categories')->truncate();

        // Insert predefined tags
        foreach ($realEstateTags as $tag) {
            DB::table('categories')->insert([
                'name' => $tag,
                'slug' => Str::slug($tag),
                'description' => $faker->paragraph,
                'status' => CategoryStatus::Active->name, // Use enum value
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        echo "Seeded categories: " . implode(', ', $realEstateTags) . "\n";
    }
}
