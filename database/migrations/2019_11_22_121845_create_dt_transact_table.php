<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtTransactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dt_transact', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('dt_schedule_id');
            $table->string('phone_number',15);
            $table->integer('adult');
            $table->integer('child');
            $table->enum('payment_status', ['success', 'failed','pending']);
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
        Schema::dropIfExists('dt_transact');
    }
}
