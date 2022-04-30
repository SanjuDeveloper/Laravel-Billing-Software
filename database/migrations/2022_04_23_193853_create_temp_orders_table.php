<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_orders', function (Blueprint $table) {
            $table->id();
            $table->string('productCode')->unique();
            $table->string('billNumber');
            $table->string('customerCode');
            $table->string('productDisco')->nullable();
            $table->string('productQuty');
            $table->string('productPrice');
            $table->string('billDate');
            $table->string('productGrand');
            $table->boolean('status')->default(0)->change();
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
        Schema::dropIfExists('temp_orders');
    }
}
