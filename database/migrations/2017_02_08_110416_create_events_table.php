<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sport_id')->unsigned();
            $table->integer('kantxa_id')->unsigned();
            $table->string('name');
            $table->integer('max_users');
            $table->dateTime('start_at');
            // $table->dateTime('finish_at');
            $table->string('rules');
            $table->integer('created_by');
            $table->timestamps();
            
            $table->foreign('sport_id')
                  ->references('id')->on('sports');
            $table->foreign('kantxa_id')
                  ->references('id')->on('kantxas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
