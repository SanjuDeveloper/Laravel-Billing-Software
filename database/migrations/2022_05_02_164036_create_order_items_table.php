<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->string('orderId');
            $table->bigInteger('billNumber');
            $table->string('productCode');
            $table->string('productName');
            $table->string('productDisco')->nullable();
            $table->string('productQuty');
            $table->string('productPrice');
            $table->string('productGrand');
            $table->string('timestamp');
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
        Schema::dropIfExists('order_items');
    }
}
