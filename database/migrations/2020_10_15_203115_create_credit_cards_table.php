<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //"credit_card":{"type":"Visa","number":"4532383564703","name":"Brooks Hudson","expirationDate":"12\/19"}}
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('number');
            $table->string('name');
            $table->string('expirationDate');
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
        Schema::dropIfExists('credit_cards');
    }
}
