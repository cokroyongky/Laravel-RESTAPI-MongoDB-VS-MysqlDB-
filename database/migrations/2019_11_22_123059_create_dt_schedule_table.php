<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dt_schedule', function (Blueprint $table) {
            $table->increments('id',5);
            $table->integer('train_id');
            $table->integer('class_id');
            $table->integer('station_departure_id');
            $table->integer('station_arrived_id');
            $table->time('departure_time');
            $table->time('arrived_time');
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
        Schema::dropIfExists('dt_schedule');
    }
}
