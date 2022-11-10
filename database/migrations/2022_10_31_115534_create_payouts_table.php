<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('wallet_address');
            $table->decimal('amount', 8,8);
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
        Schema::dropIfExists('payouts');
    }
}
