<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsOnInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductsOnInvoices', function (Blueprint $table) {
            $table->integer('Invoice_ID');
            $table->integer('Product_ID');
            $table->integer('ItemOnInvoice_Quantity')->nullable();
            
            $table->primary(['Invoice_ID', 'Product_ID']);
            $table->foreign('Invoice_ID', 'fk_Items_has_Invoices_Invoices1')->references('Invoice_ID')->on('Invoices');
            $table->foreign('Product_ID', 'fk_Items_has_Invoices_Items1')->references('Product_ID')->on('Products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductsOnInvoices');
    }
}
