<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootwearNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footwear_number', function (Blueprint $table) {
            $table->integer('id_footwear')->unsigned();
            $table->foreign('id_footwear')->references('id')->on('footwears')->onDelete('cascade');
            $table->integer('id_number')->unsigned();
            $table->foreign('id_number')->references('id')->on('numbers')->onDelete('cascade');
            $table->timestamps();
            $table->primary(['id_footwear','id_number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footwear_number');
    }
}
