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
        // make credit cards table
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');//customer id to go with each corresponding customer.
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
