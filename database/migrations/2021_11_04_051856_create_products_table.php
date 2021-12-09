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
            $table->string('name');
            $table->decimal('price');
            $table->string('state');
            $table->string('image');
            $table->unsignedBigInteger('user_iduser_seller')->nullable();
            $table->unsignedBigInteger('user_iduser_buyer')->nullable();
            $table->unsignedBigInteger('category_idcategory');
            $table->unsignedBigInteger('size_idsize');
            $table->unsignedBigInteger('brand_idbrand');
            $table->foreign('user_iduser_seller')
                ->references('id')->on('users');
            $table->foreign('user_iduser_buyer')
                ->references('id')->on('users');
            $table->foreign('category_idcategory')
                ->references('id')->on('categories');
            $table->foreign('size_idsize')
                ->references('id')->on('sizes');
            $table->foreign('brand_idbrand')
                ->references('id')->on('brands');
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
