<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {      
            $table->id();
            $table->string('payment_id');
            $table->decimal('total');
            $table->unsignedBigInteger('payment_user_seller')->nullable();
            $table->unsignedBigInteger('payment_user_buyer')->nullable();
            $table->foreign('payment_user_seller')
                ->references('id')->on('users');
            $table->foreign('payment_user_buyer')
                ->references('id')->on('users');
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
        Schema::dropIfExists('payments');
    }
}
