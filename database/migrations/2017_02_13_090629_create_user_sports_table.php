<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_sports', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('sport_id')->unsigned();
            $table->timestamps();
            
            
            $table->foreign('user_id')
                    ->references('id')->on('users');
            $table->foreign('sport_id')
                    ->references('id')->on('sports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('user_sports');
    }
}
