<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('category_id')->constrained('category')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('subcategory_id')->constrained('subcategory')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('brand_id')->constrained('brand')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('model_id')->constrained('model')->onDelete('cascade')->onUpdate('cascade');
            $table->string('year_of_registration');
            $table->integer('price');
            $table->string('file')->nullable();
            $table->string('description');
            $table->string('kms_driven');
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
        Schema::dropIfExists('p_cars');
    }
}
