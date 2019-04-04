<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootwearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footwears', function (Blueprint $table) {
            $table->increments('id');
            $table->float('barcode',25,0);
            $table->string('name');
            $table->string('brand');
            $table->string('description');
            $table->string('color');
            $table->string('color2')->default('null');
            $table->string('material');
            $table->string('category');
            $table->string('type');
            $table->integer('statusSale')->default('0');
            $table->float('price',10,2);
            $table->float('newPrice',10,2)->default('0');
            $table->integer('statusPicture')->default('0');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
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
        Schema::dropIfExists('footwears');
    }
}
