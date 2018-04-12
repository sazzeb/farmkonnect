<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w_funds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('bank');
            $table->string('teller_no');
            $table->string('amount');
            $table->string('fund_type');
            $table->string('ref_id');
            $table->string('f_status');
            $table->string('t_img');
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
        Schema::dropIfExists('w_funds');
    }
}
