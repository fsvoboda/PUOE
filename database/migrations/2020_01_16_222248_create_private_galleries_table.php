<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('private_galleries', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('gallery_id')->unsigned();
        //     $table->bigInteger('photo_type_id')->unsigned();
        //     $table->string('photo_name');
        //     $table->integer('num_order');
        //     $table->boolean('chosen')->default(false);
        //     $table->integer('Selected_number')->default(0);
        //     $table->enum('format', ['portrait','paysage']);
        //     $table->boolean('active')->default(true);
        //     $table->timestamps();
        //     $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
        //     $table->foreign('photo_type_id')->references('id')->on('photo_types')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('private_galleries');
    }
}
