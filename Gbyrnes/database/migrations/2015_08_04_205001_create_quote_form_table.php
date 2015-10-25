<?php

use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->string('email', 70);
            $table->text('phone');
            $table->string('business_type', 30);
            $table->string('sell_online', 10);
            $table->text('company_size');
            $table->text('message');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Quotes');
    }
}
