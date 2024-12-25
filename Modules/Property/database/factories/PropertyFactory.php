<?php

namespace Modules\Property\database\factories;

use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Post\Enums\PostStatus;
use Modules\Category\Models\Category;
use Modules\Property\Models\Property;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Property\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(5, true),
            'slug' => $this->faker->unique()->slug,
            'intro' => $this->faker->paragraph,
            'content' => $this->faker->paragraphs(rand(5, 7), true),
            'category_id' => Category::query()->inRandomOrder()->value('id'), // Fetch random existing category ID
            'location_id' => Location::query()->inRandomOrder()->value('id'), // Fetch random existing category ID
            'category_name' => Category::query()->where('id', $this->faker->randomElement(Category::pluck('id')->toArray()))->value('name'),
            'is_featured' => $this->faker->boolean,
            'image' => 'https://picsum.photos/1200/630?random=' . rand(1, 50),
            'meta_title' => $this->faker->sentence,
            'meta_keywords' => implode(', ', $this->faker->words(5)),
            'meta_description' => $this->faker->sentence,
            'meta_og_image' => $this->faker->imageUrl(1200, 630, 'property-meta', true),
            'meta_og_url' => $this->faker->url,
            'hits' => $this->faker->numberBetween(0, 1000),
            'order' => $this->faker->randomDigitNotNull(),
            'status' => PostStatus::getAllNames()[array_rand(PostStatus::getAllNames())] ?? 'draft',
            'moderated_by' => $this->faker->randomDigitNotNull(),
            'moderated_at' => $this->faker->optional()->dateTimeThisYear(),
            'created_by' => $this->faker->randomDigitNotNull(),
            'updated_by' => $this->faker->randomDigitNotNull(),
            'deleted_by' => $this->faker->optional()->randomDigitNotNull(),
            'address' => $this->faker->address,
            'description' => $this->faker->paragraph,
            'additional_info' => $this->faker->text(200),
            'size' => $this->faker->numberBetween(50, 500) . ' sqm',
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 4),
            'garage' => $this->faker->boolean ? $this->faker->numberBetween(1, 2) : null,
            'price' => $this->faker->randomFloat(2, 50000, 1000000),
            'available_from' => $this->faker->date(),
            'year_built' => $this->faker->year,
            'cross_streets' => $this->faker->streetName,
            'floors' => $this->faker->numberBetween(1, 3),
            'plumbing' => $this->faker->randomElement(['Excellent', 'Good', 'Needs repair']),
            'published_at' => $this->faker->optional()->dateTimeBetween('-1 years', 'now'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
