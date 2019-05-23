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
            $table->increments('id');
            $table->integer('footwear_id')->unsigned();
            $table->foreign('footwear_id')->references('id')->on('footwear')->onDelete('cascade');
            $table->float('number_id')->unsigned();
            $table->foreign('number_id')->references('footweareNumber')->on('number')->onDelete('cascade');
            $table->integer('qty')->default('0');
           

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
