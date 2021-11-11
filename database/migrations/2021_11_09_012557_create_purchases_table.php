<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->timestamp('purchase_date');
            $table->decimal('amount');
            $table->unsignedBigInteger('user_iduser_seller');
            $table->unsignedBigInteger('user_iduser_buyer');
            $table->unsignedBigInteger('product_idproduct');
            $table->foreign('user_iduser_seller')
                ->references('id')->on('users');
            $table->foreign('user_iduser_buyer')
                ->references('id')->on('users');
            $table->foreign('product_idproduct')
                ->references('id')->on('products');
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
        Schema::dropIfExists('purchases');
    }
}
