<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();

            $table->string('travel_name', 150);
            $table->string('country', 50);
            $table->string('state', 50);
            $table->string('transport', 50);
            $table->date('start');
            $table->string('description', 500);
            $table->date('return');
            $table->bigInteger('price');
            $table->string('notes', 250);
            $table->boolean('passport');
            $table->boolean('vacancy');
            $table->boolean('discount');
            
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
        Schema::dropIfExists('viaggi');
    }
}
