<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderManipulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderManipulations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->string('item_name');
            $table->integer('quantity');
            $table->integer('net_total');
            $table->timestamps();

        $table->foreign('order_id')
            ->references('id')
            ->on('orders')->onDelete('cascade');

        $table->foreign('item_id')
            ->references('id')
            ->on('items')->onDelete('cascade');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderManipulations');
    }
}
