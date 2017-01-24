<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Crudproducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('rivecowe', function(Blueprint $table){
    $table->increments('id');
    $table->timestamps();
    $table->string('name')->unique();
    $table->integer('price');
    $table->integer('quantity');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('rivecowe');
    }
}
