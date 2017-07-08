<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlineIncomes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('online_order_id')->unsigned();
            $table->double('grand_total',7,3);
            $table->timestamps();

            $table->foreign('online_order_id')
                ->references('id')
                ->on('onlineOrders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onlineIncomes');
    }
}
