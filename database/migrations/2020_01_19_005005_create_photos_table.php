<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('event_id')->unsigned();
            $table->bigInteger('photo_type_id')->unsigned()->nullable();
            $table->boolean('private')->default(false);
            $table->integer('num_order')->nullable();
            $table->boolean('chosen')->default(false);
            $table->integer('Selected_number')->default(0);
            $table->enum('format', ['portrait','paysage'])->default('paysage');
            $table->integer('like')->default(0);
            $table->integer('unlike')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->foreign('photo_type_id')->references('id')->on('photo_types')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
