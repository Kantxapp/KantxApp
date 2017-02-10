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
            $table->string('name')->unique();
            $table->string('streetNumber');
            $table->string('route');
            $table->string('locality');
            $table->string('province');
            $table->string('formatedAddress');
            $table->string('lat');
            $table->string('lng');
            $table->string('KantxaPic');
            $table->string('place_id')->unique();
            $table->integer('sensor_id')->nullable()->unique()->unsigned();
            $table->timestamps();
            
            $table->foreign('sensor_id')
                  ->references('id')->on('sensors');

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
