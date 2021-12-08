<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_iduser')->nullable();
            $table->foreign('user_iduser')
            ->references('id')->on('users');
            $table->unsignedBigInteger('product_idproduct');
            $table->foreign('product_idproduct')
            ->references('id')->on('products');
            $table->integer('product_count');
            $table->decimal('price_unit');
            $table->decimal('price_total');
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
        Schema::dropIfExists('cart');
    }
}
