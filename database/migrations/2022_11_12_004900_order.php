<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('order_id');
            $table->string('from_currency');
            $table->string('to_currency');
            $table->string('send_amount');
            $table->string('receive_amount');
            $table->string('receive_address');
            $table->string('order_rate');
            $table->string('order_rateRev');
            $table->string('order_status')->comment('Currenct status of the order');
            $table->string('order_left')->comment('Amount left to complete the transaction deposit');
            $table->string('order_token');
            $table->json('raw_data')->comment('Json encode of the raw response from the API server');
            $table->string('order_type')->comment('fixed or float');
            $table->string('order_reg')->comment('Time Order was initiated');
            $table->string('order_expiration')->comment('Order expires by');
            $table->timestampsTz();
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
