<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Modules\Tag\database\seeders\TagDatabaseSeeder;
use Modules\Post\database\seeders\PostDatabaseSeeder;
use Modules\Category\database\seeders\CategoryDatabaseSeeder;
use Modules\Property\database\seeders\PropertyDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call(
            [
                // AuthTableSeeder::class,
                // CategoryDatabaseSeeder::class,
                // TagDatabaseSeeder::class,
                // PostDatabaseSeeder::class,
                PropertyDatabaseSeeder::class
            ]
        );

        Schema::enableForeignKeyConstraints();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
