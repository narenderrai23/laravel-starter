<?php

namespace Modules\Category\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Category\Models\Category;
use Illuminate\Support\Facades\Http;

class CategoryDatabaseSeeder extends Seeder
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
         * Categories Seed
         * ------------------
         */

        // DB::table('categories')->truncate();
        // echo "Truncate: categories \n";

        $response = Http::get('https://newsapi.org/v2/everything', [
            'q' => 'tesla',
            'from' => '2024-11-17',
            'sortBy' => 'publishedAt',
            'apiKey' => '0bddab3e6e7a4dd6bdbbd0ea103870c5',
        ]);
    
        if ($response->successful()) {
            // Parse the response as an array
            $data = $response->json();

            dd($data);
            
            // Handle the data (e.g., store it in the database, return it, etc.)
            return response()->json($data);
        } else {
            // Handle the error if the request fails
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }

        // Category::factory()->count(20)->create();
        // $rows = Category::all();
        echo " Insert: categories \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
