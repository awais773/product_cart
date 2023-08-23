<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHammersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hammers', function (Blueprint $table) {
            $table->id();
            $table->string('HammerName')->nullable();
            $table->string('Price')->nullable();
            $table->string('HammerIndex')->nullable();
            $table->string('IsUnlocked')->nullable();
            $table->string('Health')->nullable();
            $table->string('Strenght')->nullable();
            $table->string('Power')->nullable();
            $table->string('Damage')->nullable();
            $table->string('Gold')->nullable();
            $table->string('Gem')->nullable();
            $table->string('Diamond')->nullable();
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
        Schema::dropIfExists('hammers');
    }
}
