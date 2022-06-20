<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employees', function (Blueprint $table) {
            $table->integer('Employee_ID')->primary();
            $table->string('Employee_Name', 1055)->nullable();
            $table->string('Employee_MiddleName', 1055)->nullable();
            $table->string('Employee_LastName', 58)->nullable();
            $table->string('Employee_Addres', 55)->nullable();
            $table->integer('Employee_HouseNumber')->nullable();
            $table->char('Employee_PostalCode', 6)->nullable();
            $table->string('Employee_TownShip', 45)->nullable();
            $table->string('Employee_Email', 345)->nullable();
            $table->string('Employee_PhoneNumber', 30)->nullable();
            $table->date('Employee_DateOfBirth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Employees');
    }
}
