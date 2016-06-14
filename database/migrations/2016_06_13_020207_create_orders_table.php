<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_num');
            $table->date("order_date");
            $table->integer('store_id')->unsigned();
            $table->foreign('store_id')
                ->references('id')->on('stores');

            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')
                ->references('id')->on('addresses');

            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
