<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->timestamp('deposit_date');
            $table->decimal('amount');
            $table->string('state',45);
            $table->unsignedBigInteger('user_iduser');
            $table->unsignedBigInteger('purchase_idpurchase');
            $table->foreign('user_iduser')
                ->references('id')->on('users');
            $table->foreign('purchase_idpurchase')
                ->references('id')->on('purchases');
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
        Schema::dropIfExists('deposits');
    }
}
