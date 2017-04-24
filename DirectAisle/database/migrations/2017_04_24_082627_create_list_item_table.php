<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('list_items', function($table)
            {
                    $table->increments('id');
                    $table->foreign('list_id')->references('id')->on('lists');
                    $table->foreign('product_id')->references('id')->on('productlocations');
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
        Schema::drop('list_items');
    }
}
