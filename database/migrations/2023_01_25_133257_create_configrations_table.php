<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configrations', function (Blueprint $table) {
            $table->id();
            $table->string('a')->nullable();
            $table->string('hp')->nullable();
            $table->string('mt')->nullable();
            $table->string('av')->nullable();
            $table->string('ah')->nullable();
            $table->string('tba')->nullable();
            $table->string('ap1')->nullable();
            $table->string('ap2')->nullable();
            $table->string('rlc1')->nullable();
            $table->string('xs1')->nullable();
            $table->string('rlc2')->nullable();
            $table->string('xs2')->nullable();
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
        Schema::dropIfExists('configrations');
    }
}
