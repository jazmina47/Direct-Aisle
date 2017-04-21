<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_locations', function (Blueprint $table) {
            $table->increments('Item_id');
            $table->integer('Aisle_num');
            $table->integer('Section_num');
            $table->string('Which_end');
            $table->string('Which_side');
            $table->string('Category');
            $table->string('Description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_locations');
    }
}
