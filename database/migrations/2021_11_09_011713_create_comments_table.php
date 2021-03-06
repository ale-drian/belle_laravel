<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamp('publication_date');
            $table->string('content');
            $table->unsignedBigInteger('user_iduser');
            $table->unsignedBigInteger('user_iduser_comment');
            $table->foreign('user_iduser')
                    ->references('id')->on('users');
            $table->foreign('user_iduser_comment')
                    ->references('id')->on('users');
            $table->integer('star')->nulleable;
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
        Schema::dropIfExists('comments');
    }
}
