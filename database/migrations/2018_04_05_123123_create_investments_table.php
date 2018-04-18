<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('amount')->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('packages')->nullable();
            $table->string('created_date')->nullable();
            $table->string('daily_profit')->nullable();
            $table->string('monly_profit')->nullable();
            $table->string('yrly_profit')->nullable();
            $table->string('profit')->nullable();
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
        Schema::dropIfExists('investments');
    }
}
