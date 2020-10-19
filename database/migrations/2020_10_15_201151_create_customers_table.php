<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('address');
            $table->boolean('checked');
            $table->text('description');
            $table->text('interest')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('email');
            $table->string('account');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();


        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
