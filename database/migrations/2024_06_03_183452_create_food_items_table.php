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
        Schema::create('food_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->text('image_url')->nullable();
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('category_id')->index()->nullable();
            $table->timestamps();
        });

        Schema::table('food_items', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('food_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_items');
    }
};
