<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estimate_queries', function (Blueprint $table) {
            $table->id();
            // $table->string('full_name');
            // $table->string('phone_number');
            // $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            // $table->foreignId('property_type_id')->constrained('property_types')->onDelete('cascade');
            // $table->integer('min_beds')->nullable();
            // $table->integer('min_baths')->nullable();
            // $table->decimal('min_area', 10, 2)->nullable();
            // $table->decimal('max_area', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimate_queries');
    }
};
