<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKantxasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kantxas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('place_id');
            $table->integer('sensor_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('sensor_id')
                  ->references('id')->on('sensors');
            
            // $table->foreign('event_id')
            //       ->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kantxas');
    }
}
