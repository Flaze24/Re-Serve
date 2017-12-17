<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function(Blueprint $table){
            $table->increments('id');
            $table->dateTime('reserve_date');
            $table->timestamp('reserve_time');
            $table->integer('guest_amount');
            $table->string('user_id');
            $table->string('restaurant_id');
            $table->string('message')->nullable();
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
        Schema::dropIfExists('reserves');
    }
}
