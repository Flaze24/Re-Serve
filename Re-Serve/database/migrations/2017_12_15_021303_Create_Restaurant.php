<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function(Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->string('description');
                $table->string('email')->unique()->nullable();
                $table->string('phone')->nullable();
                $table->enum('type',['bar', 'family', 'dining', 'cafe', 'gourmet']);
                $table->enum('clothing',['none','casual','formal'])->nullable()->default('none');
                $table->string('chef_name')->nullable()->default('none');
                $table->string('address');
                $table->enum('dish_type',['italian','chinese','french','latin_american','gourmet','grill','desserts','european']);
                $table->string('main_dish')->nullable()->default('none');
                $table->string('dish_description');
                $table->timestamp('opening_time');
                $table->timestamp('closing_time')->useCurrent();
                $table->integer('reserve_number');
                $table->string('restaurant_photo');
                $table->string('user_id');
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
        Schema::dropIfExists('restaurants');
    }
}
