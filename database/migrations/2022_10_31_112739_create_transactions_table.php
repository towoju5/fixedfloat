<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('trans_type');
            $table->string('order_id');
            $table->decimal('amount', 8,8);
            $table->string('send');
            $table->string('receive');
            $table->string('send_address');
            $table->string('receive_address');
            $table->enum('status', [0,1,2,3])->comment("0 : pending, 1 : processing, 2 : pending_payout, 3 : completed");
            $table->timestampsTz();
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
