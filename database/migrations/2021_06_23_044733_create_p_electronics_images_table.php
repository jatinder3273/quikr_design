<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePElectronicsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_electronics_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('electronics_id')->constrained('p_electronics')->onDelete('cascade')->onUpdate('cascade');
            $table->string('file');
            $table->string('cover_image')->nullable();
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
        Schema::dropIfExists('p_electronics_images');
    }
}
