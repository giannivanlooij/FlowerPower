<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Invoices', function (Blueprint $table) {
            $table->integer('Invoice_ID')->primary();
            $table->integer('Customer_ID')->nullable();
            $table->date('Invoice_Date')->nullable();
            $table->boolean('Invoice_OrderPickedUp')->default(0);
            $table->integer('Employee_ID');
            $table->integer('FlowerShop_ID');
            
            $table->foreign('Customer_ID', 'fk_Invoices_Customer')->references('Customer_ID')->on('Customer');
            $table->foreign('Employee_ID', 'fk_Invoices_Florists1')->references('Employee_ID')->on('Employees');
            $table->foreign('FlowerShop_ID', 'fk_Invoices_FlowerShops1')->references('FlowerShop_ID')->on('FlowerShops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Invoices');
    }
}
