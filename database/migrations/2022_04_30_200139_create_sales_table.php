<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('productCode')->unique();
            $table->string('billNumber')->unique();
            $table->string('customerCode');
            $table->string('productDisco')->nullable();
            $table->string('productQuty');
            $table->string('productPrice');
            $table->string('billDate');
            $table->string('productGrand');
            $table->boolean('status')->default(1)->change();
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
        Schema::dropIfExists('sales');
    }
}
