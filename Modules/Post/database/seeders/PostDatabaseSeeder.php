<?php

namespace Modules\Post\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Post\Models\Post;

class PostDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks

        // Seed posts
        try {
            DB::table('posts')->truncate();
            echo "Truncate: posts\n";

            Post::factory()->count(20)->create();
            echo "Insert: posts\n";
        } catch (\Exception $e) {
            echo "Error seeding posts: " . $e->getMessage() . "\n";
        }

        // Enable foreign key checks
    }
}
