<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferralListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('depositors_id');
            $table->integer('ref_id');
            $table->string('referrer_email');
            $table->string('referrer_code');
            $table->boolean('referrer_generation')->nullable();
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
        Schema::dropIfExists('referral_lists');
    }
}
