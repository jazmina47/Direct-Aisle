<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product_locations', function($table)
            {
                    $table->increments('id');
                    $table->integer('aisle_num');
                    $table->integer('section_num');
                    $table->enum('section', ['front', 'back']);
                    $table->enum('which_side', ['left', 'right']);
                    $table->string('category');
                    $table->string('product_name');
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
      Schema::drop('product_locations');

    }
}
