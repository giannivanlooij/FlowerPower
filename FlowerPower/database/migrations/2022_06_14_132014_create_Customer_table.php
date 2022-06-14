<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customer', function (Blueprint $table) {
            $table->integer('Customer_ID')->primary();
            $table->string('Customer_Name', 1055)->nullable();
            $table->string('Customer_MiddleName', 1055)->nullable();
            $table->string('Customer_LastName', 58)->nullable();
            $table->string('Customer_Addres', 55)->nullable();
            $table->integer('Customer_HouseNumber')->nullable();
            $table->char('Customer_PostalCode', 6)->nullable();
            $table->string('Customer_TownShip', 45)->nullable()->comment("almere lelystad etc");
            $table->string('Customer_Email', 345)->nullable();
            $table->string('Customer_PhoneNumber', 30)->nullable();
            $table->date('Customer_DateOfBirth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Customer');
    }
}
