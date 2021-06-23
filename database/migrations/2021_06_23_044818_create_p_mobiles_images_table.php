<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePMobilesImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_mobiles_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mobiles_id')->constrained('p_mobiles')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('p_mobiles_images');
    }
}
