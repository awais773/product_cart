<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('store_name')->nullable();
            $table->boolean('kosher_status')->nullable();
            $table->string('barcode')->nullable();
            $table->text('description')->nullable();
            $table->string('manufacturer')->nullable();
            $table->foreignId("distributer_id")->nullable()->constrained('distributers');
            $table->foreignId("category_id")->nullable()->constrained('categories');            
            $table->string('product_family')->nullable();
            $table->string('packing')->nullable();
            $table->string('diet')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('ingredients')->nullable();
            $table->string('product_image')->nullable();
            $table->foreignId("user_id")->nullable()->constrained('users');  
            $table->string('note')->nullable();
            $table->boolean('status')->nullable();
            $table->string('germany_name')->nullable();
            $table->string('hebrew_name')->nullable();

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
        Schema::dropIfExists('products');
    }
}
