<?php

namespace Modules\Post\database\factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Post\Enums\PostStatus;
use Modules\Post\Enums\PostType;
use Modules\Category\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Post\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Post\Models\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(5, true),
            'slug' => $this->faker->slug,
            'intro' => $this->faker->paragraph,
            'content' => $this->faker->paragraphs(rand(5, 7), true),
            'type' => PostType::getAllNames()[array_rand(PostType::getAllNames())] ?? 'default',
            'is_featured' => $this->faker->boolean,
            'image' => 'https://picsum.photos/1200/630?random=' . rand(1, 50),
            'status' => PostStatus::getAllNames()[array_rand(PostStatus::getAllNames())] ?? 'draft',
            'category_id' => Category::query()->inRandomOrder()->value('id'), // Fetch random existing category ID
            'meta_title' => $this->faker->sentence,
            'meta_keywords' => implode(', ', $this->faker->words(5)),
            'meta_description' => $this->faker->sentence,
            'meta_og_image' => 'https://picsum.photos/1200/630?random=' . rand(51, 100),
            'meta_og_url' => $this->faker->url,
            'created_by_name' => $this->faker->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'published_at' => $this->faker->optional()->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
