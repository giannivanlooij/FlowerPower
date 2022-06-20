<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowerShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FlowerShops', function (Blueprint $table) {
            $table->integer('FlowerShop_ID')->primary();
            $table->string('FlowerShop_Addres', 55);
            $table->integer('FlowerShop_HouseNumber')->nullable();
            $table->char('FlowerShop_PostalCode', 6)->nullable();
            $table->string('FlowerShop_TownShip', 45)->nullable();
            $table->string('FlowerShop_PhoneNumber', 30)->nullable()->comment("Volgens de standaard van ITU-T is het maximum 15 cijfers.\nITU-T (International Telecommunication Union) is één van de drie sectoren van de ITU, dat telecommunicatiestandaarden coördineert.\n\nHier komt nog de internationale toegangscode bij. De maximumlengte hiervan is 5 cijfers (Finland).\n\nHet langste telefoonnummer is dus 15+5 = 20 cijfers.\n\nIk weet niet hoeveel ruimte je hebt, maar een telefoonnummer van enkel 20 cijfers is niet heel leesbaar. Als je er rekening mee wilt houden dat iemand ook graag z’n haakjes, spaties en streepjes invoert, zou je misschien beter ruimte kunnen reserveren voor 30 tekens.");
            $table->string('FlowerShop_Email', 345)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FlowerShops');
    }
}
