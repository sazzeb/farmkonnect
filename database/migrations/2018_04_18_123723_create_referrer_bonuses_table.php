<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferrerBonusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referrer_bonuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('refer_id');
            $table->string('referrer_profit');
            $table->string('amount_deposited');
            $table->string('refer_email');
            $table->string('depositors_email');
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
        Schema::dropIfExists('referrer_bonuses');
    }
}
