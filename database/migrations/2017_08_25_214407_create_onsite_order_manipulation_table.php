<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnsiteOrderManipulationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onsite_order_manipulations', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->string('food_name');
            $table->integer('quantity');
            $table->double('base_price',7,3);
            $table->double('net_total',10,3);
            $table->timestamps();

            $table->foreign('order_id')
                ->references('id')
                ->on('onsite_orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onsite_order_manipulations');
    }
}
