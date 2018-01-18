<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('startPrice');
            $table->integer('buyItNowPrice');
            $table->integer('duration');
            $table->string('status');
            $table->string('payment');
            $table->string('title');
            $table->string('itemCondition');
            $table->string('itemDescription');
            $table->string('conditionDescription');
            $table->string('productToken');
            $table->string('product_type');
            $table->string('pic1');
            $table->string('pic2');
            $table->string('pic3');
            $table->date('bidDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
