<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodNutrientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_nutrient', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('nutrient_id');
            // $table->text('description')->nullable();
            $table->float('description', 8, 1)->nullable();          // Calories
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->foreign('nutrient_id')->references('id')->on('nutrients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_nutrient');
    }
}
