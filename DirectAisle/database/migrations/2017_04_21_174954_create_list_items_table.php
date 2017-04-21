<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_items', function (Blueprint $table) {
            $table->integer('list_id')->unsigned();
            $table->foreign('list_id')->references('list_id')->on('lists'); /* fk: list_id */
            $table->integer('item_id')->unsigned();
            $table->foreign('item_id')->references('item_id')->on('product_locations'); /* fk: item_id */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_items');
    }
}
