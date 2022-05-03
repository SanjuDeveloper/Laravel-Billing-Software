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
            $table->string('billNumber')->unique();
            $table->bigInteger('customerCode');
            $table->string('customerName');
            $table->string('billDate');
            $table->string('GST');
            $table->string('netPayable'); 
            $table->bigInteger('discount')->default(0)->change();
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
