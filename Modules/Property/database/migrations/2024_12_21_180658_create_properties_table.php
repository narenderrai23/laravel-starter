<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Post\Enums\PostStatus;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', callback: function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('intro')->nullable();
            $table->longText('content')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('location_id')->unsigned()->nullable();
            $table->string('category_name')->nullable();
            $table->integer('is_featured')->nullable();
            $table->string('image')->nullable();

            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_og_image')->nullable();
            $table->string('meta_og_url')->nullable();

            $table->integer('hits')->default(0)->unsigned();
            $table->integer('order')->nullable();
            $table->string('status')->default(PostStatus::Published->name);

            $table->integer('moderated_by')->unsigned()->nullable();
            $table->datetime('moderated_at')->nullable();

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

            $table->string('address')->nullable();
            $table->string('size')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('garage')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->date('available_from')->nullable();
            $table->integer('year_built')->nullable();
            $table->string('cross_streets')->nullable();
            $table->integer('floors')->nullable();
            $table->string('plumbing')->nullable();

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
