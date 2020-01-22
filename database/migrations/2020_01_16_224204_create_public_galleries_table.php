<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('public_galleries', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('gallery_id')->unsigned();
        //     $table->bigInteger('category_id')->unsigned();
        //     $table->string('photo_name');
        //     $table->integer('width');
        //     $table->integer('height');
        //     $table->enum('format', ['portrait','paysage']);
        //     $table->integer('like')->default(0);
        //     $table->integer('unlike')->default(0);
        //     $table->boolean('active')->default(true);
        //     $table->timestamps();
        //     $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
        //     $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('public_galleries');
    }
}
