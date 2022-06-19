<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->integer('Product_ID')->primary();
            $table->string('Product_Name', 100)->nullable();
            $table->string('Product_Description', 500)->nullable();
            $table->decimal('Product_Price', 5, 2)->nullable();
            $table->integer('Product_Stock')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}
