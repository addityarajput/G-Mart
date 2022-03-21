<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_brand', function (Blueprint $table) {
            $table->bigIncrements('BrandId');
            $table->string('BrandName')->nullable();
            $table->string('BrandSlogan')->nullable();
            $table->string('BrandLogo')->nullable();
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
        Schema::dropIfExists('add_brand');
    }
}
