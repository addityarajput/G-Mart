<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ProductName')->nullable();
            $table->string('ProductId')->nullable();
            $table->string('ProductPrice')->nullable();
            $table->string('ProductImage')->nullable();
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
        Schema::dropIfExists('add_product');
    }
}
