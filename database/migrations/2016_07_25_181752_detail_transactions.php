<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->integer('trans_id');
            $table->integer('item_id');
            $table->integer('qty');
            $table->integer('unit_price');
            $table->integer('profit_unit');
            $table->integer('sum');
            $table->integer('profit_sum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('detail_transactions');
    }
}
