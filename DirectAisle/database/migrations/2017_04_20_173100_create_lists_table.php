<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists', function (Blueprint $table) {
            $table->increments('list_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users'); /* fk: user_id */
            $table->string('list_name');
            $table->timestamps();

          $table->enum('state', ['open', 'closed']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lists');
    }
}
